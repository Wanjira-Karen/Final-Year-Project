<?php
session_start();

if (!isset($_SESSION['controllerId'])) {
    header("Location: ../login.php");
    exit();
}

require_once "../db-config.php";

// Get all items from the database
$controllerId = $_SESSION['controllerId'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['response_id'])) {
    $responseId = $_POST['response_id'];
    $newResponseStatus = $_POST['new_response_status'];

    // Update the response in the database
    $stmt = $conn->prepare("UPDATE communication_responses SET response_status = ? WHERE id = ?");
    $stmt->bind_param("ii", $newResponseStatus, $responseId);
    $stmt->execute();
    $stmt->close();

    // Redirect to this page to refresh the report table
    header("Location: communication-report.php");
    exit();
}
$sql = "SELECT * FROM communication_responses WHERE controller = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION['controllerId']);
$stmt->execute();
$result = $stmt->get_result();

$responseArray = array(); // Initialize an array to store response status and item descriptions

while ($row = $result->fetch_assoc()) {
    $item_id = $row['item'];
    $response_status = $row['response_status'];

    // Fetch item description from communication_items table
    $sql2 = "SELECT item_description FROM communication_items WHERE id = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("i", $item_id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row2 = $result2->fetch_assoc();
    $item_description = $row2['item_description'];

    switch ($response_status) {
        case 1:
            $responseStatus = "Non-compliant";
            break;
        case 2:
            $responseStatus = "Partial Compliance";
            break;
        case 3:
            $responseStatus = "Compliant";
            break;
        case 4:
            $responseStatus = "Exceeds Compliance";
            break;
        case 5:
            $responseStatus = "Exceptional";
            break;
    }

    // Add response status, item description, and response id to the array
    $responseArray[] = array('response_id' => $row['id'], 'response_status' => $responseStatus, 'item_description' => $item_description);
}
$stmt->close();


// Now $responseArray contains the response status and its corresponding item descriptions
