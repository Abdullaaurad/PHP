<!-- process.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
        // Retrieve and sanitize form inputs
        $name = htmlspecialchars($_REQUEST['name']);
        $email = htmlspecialchars($_REQUEST['email']);

        // Display the received data
        echo "<h1>Received Data</h1>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo $_SERVER['REQUEST_METHOD'];
    }
    else{
        echo "<p>Form inputs are not set.</p>";
    }
    ?>
</body>
</html>
 