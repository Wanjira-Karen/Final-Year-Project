<?php
session_start();
require_once "DPA_dbregister.php";

// Get all items from the database"
$controllerId = $_SESSION['controllerId'];

$sql = "SELECT * FROM data_collection_responses where controller='$controllerId'";
$result = mysqli_query($conn, $sql);

$responseArray = array(); // Initialize an array to store response status and item descriptions

while ($row = mysqli_fetch_assoc($result)) {
    $item_id = $row['item'];
    $response_status = $row['response_status'];

    // Fetch item description from data_collection_items table
    $sql2 = "SELECT item_description FROM data_collection_items where id=$item_id";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $item_description = $row2['item_description'];

    // Add response status and item description to the array
    $responseArray[] = array('response_status' => $response_status, 'item_description' => $item_description);
}

// Now $responseArray contains the response status and its corresponding item descriptions
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data collection Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/colreorder/2.0.0/css/colReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/2.0.0/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">DPA Complier</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./datacollection.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="./datacollection-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="./datacollection-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DPA_services.php">Incident Response</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DPA_contacts.php">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DPA_contacts.php">Data Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DPA_contacts.php">Subject Communication</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DPA_contacts.php">Policy Adherence</a>
                    </li>
                </ul>
                <a class="btn btn-danger" href="./logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <p class="display-3 text-center">Data Collection Report</p>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Compliant</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($responseArray as $response) {
                        echo "<tr>";
                        echo "<td>" . $response['item_description'] . "</td>";
                        echo "<td>" . ($response['response_status'] ? 'Yes' : 'No') . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $('#myTable').DataTable({
            rowReorder: true,
            dom: 'Bfrtip',
            buttons: [
                'pdf',
                'csv',
                'excel',
                'print',
                'copy',
            ]
        });
    </script>
</body>

</html>