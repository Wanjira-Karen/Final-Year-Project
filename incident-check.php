<?php
require_once "./incident-check.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incident Response</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <p class="display-3">Incident Response</p>
            <form method="post" action="">
                <table id="check-table" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Item Description</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?php echo $item['item_description'] ?></td>
                                <td>
                                    <input class="form-range" type="range" name="item_<?php echo $item["id"] ?>" id="item_<?php echo $item['id'] ?>" value="3" min="1" max="5" required>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>