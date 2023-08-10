<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Server Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    ob_start();
    // Check if PHP is working
    $phpVersion = phpversion();
    if (empty($phpVersion)) {
        echo '<h1 class="error">Error!!! PHP Web Server Test</h1>';
        echo '<p class="error">Error!!! PHP does not work!</p>';
    } else {
        echo '<h1 class="success">PHP Web Server Test Done</h1>';
        echo '<p class="success">PHP is working!</p>';
        echo '<p class="success">PHP Version: ' . $phpVersion . '</p>';
    }
    ob_end_flush();
    ?>
</body>

</html>
