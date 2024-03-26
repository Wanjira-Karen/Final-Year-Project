<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 8px 8px 0 0;
            padding: 15px 20px;
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 20px;
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-body a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .card-body a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>DASHBOARD</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Collection</h2>
                    </div>
                    <div class="card-body">
                        <a href="data-collection/check.php">Check Compliance</a>
                        <a href="data-collection/update.php">Update Compliance Status</a>
                        <a href="data-collection/report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Incident Response</h2>
                    </div>
                    <div class="card-body">
                        <a href="incident/incident-check.php">Check Compliance</a>
                        <a href="incident/incident-update.php">Update Compliance Status</a>
                        <a href="incident/incident-report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Policy Adherence</h2>
                    </div>
                    <div class="card-body">
                        <a href="policy/policy-check.php">Check Compliance</a>
                        <a href="policy/policy-update.php">Update Compliance Status</a>
                        <a href="policy/policy-report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Training and awareness</h2>
                    </div>
                    <div class="card-body">
                        <a href="training-awareness/training-checklist.php">Check Compliance</a>
                        <a href="training-awareness/training-update.php">Update Compliance Status</a>
                        <a href="training-awareness/training-report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Subject Communication</h2>
                    </div>
                    <div class="card-body">
                        <a href="communication/communication-check.php">Check Compliance</a>
                        <a href="communication/communication-update.php">Update Compliance Status</a>
                        <a href="communication/communication-report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Security</h2>
                    </div>
                    <div class="card-body">
                        <a href="data-security/security-checklist.php">Check Compliance</a>
                        <a href="data-security/security-update.php">Update Compliance Status</a>
                        <a href="data-security/security-report.php">Generate Report</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <a href="logout.php" style="btn-btn danger;">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>