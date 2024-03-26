<?php
session_start();

if (!isset($_SESSION['controllerId'])) {
    header("Location: ../login.php");
    exit();
}

require_once "../db-config.php";

// Get all items from the database"
$controllerId = $_SESSION['controllerId'];

$sql = "SELECT * FROM training_responses WHERE controller = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION['controllerId']);
$stmt->execute();
$result = $stmt->get_result();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    while ($item = mysqli_fetch_assoc($result)) {
        $responseStatus = $_POST["item_{$item['id']}"];

        $stmt = $conn->prepare("UPDATE training_responses SET response_status = ? WHERE id = ?");

        // Bind parameters and execute the SQL statement
        $stmt->bind_param("ii", $responseStatus,  $item['id']);
        $stmt->execute();
    }
    $stmt->close();

    // Redirect to this page to refresh the report table
    header("Location: ./training-update.php");
    exit();
}


$responseArray = array(); // Initialize an array to store response status and item descriptions

while ($row = $result->fetch_assoc()) {
    $item_id = $row['item'];
    $response_status = $row['response_status'];

    // Fetch item description from training_items table
    $sql2 = "SELECT item_description FROM training_items WHERE id = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("i", $item_id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row2 = $result2->fetch_assoc();
    $item_description = $row2['item_description'];

    // Add response status, item description, and response id to the array
    $responseArray[] = array('response_id' => $row['id'], 'response_status' => $response_status, 'item_description' => $item_description);
}
$stmt->close();
// Now $responseArray contains the response status and its corresponding item descriptions
