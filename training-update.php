<?php
require_once "./train-update.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Awareness Update</title>
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
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./check.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="./report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="./update.php">Update Compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Incident Response
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../incident/incident-check.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="../incident/incident-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="../incident/incident-update.php">Update Compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="training-checklist.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Training and Awareness
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../training-awareness/training-checklist.php">Check Compliance</a></li>

                            <li><a class="dropdown-item" href="../training-awareness/training-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="../training-awareness/training-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="security-checklist.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Security
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../data-security/security-checklist.php">Check Compliance</a></li>

                            <li><a class="dropdown-item" href="../data-security/security-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="../data-security/security-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="security-checklist.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Subject Communication
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../communication/communication-check.php">Check Compliance</a></li>

                            <li><a class="dropdown-item" href="../communication/communication-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="../communication/communication-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Policy Adherence
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../policy/policy-check.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="../policy/policy-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="../policy/policy-update.php">Update Compliance</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="btn btn-danger" href="../logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <p class="display-3">Training and Awareness Update</p>
            <form method="post" action="">
                <table id="check-table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Item Description</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($responseArray as $response) : ?>
                            <tr>
                                <td><?php echo $response['item_description'] ?></td>
                                <td>
                                    <input class="form-range" type="range" name="item_<?php echo $response["response_id"] ?>" id="item_<?php echo $response['response_id'] ?>" value="<?php echo $response["response_status"] ?>" min="1" max="5" required>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
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