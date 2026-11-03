
<?php
$application = "PHP CI/CD Pipeline";
$platform = "AWS CodeDeploy";
$deployment = "Successful";

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP CI/CD Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            text-align: center;
            padding: 80px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            max-width: 600px;
            margin: auto;
        }
        h1 { color: #2563eb; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $application; ?></h1>
        <h2>Welcome!</h2>
        <p>Deployment Platform: <?php echo $platform; ?></p>
        <p class="success">
            Deployment Status: <?php echo $deployment; ?>
        </p>
        <p>Application deployed successfully.</p>
    </div>
</body>
</html>
