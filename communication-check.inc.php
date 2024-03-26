<?php
session_start();

if (!isset($_SESSION['controllerId'])) {
    header("Location: ../login.php");
}

require_once "../db-config.php";

// Get all the checked items and store in an array
$sql = "SELECT * FROM communication_items";
$result = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the controller ID from the session
    $controllerId = $_SESSION['controllerId'];

    while ($item = mysqli_fetch_assoc($result)) {
        $responseStatus = $_POST["item_{$item['id']}"];

        $stmt = $conn->prepare("INSERT INTO communication_responses (controller, item, response_status) VALUES (?, ?, ?)");

        // Bind parameters and execute the SQL statement
        $stmt->bind_param("sss", $controllerId, $item['id'], $responseStatus);
        $stmt->execute();
    }
    $stmt->close();

    // Redirect the user to a success page
    header("Location: communication-check.php?success=true");
    exit();
}
