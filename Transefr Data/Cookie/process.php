<!-- process.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "COOKIE") {
        // Check if the form inputs are set
        if (isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
            // Retrieve and sanitize form inputs
            $name = htmlspecialchars($_COOKIE['name']);
            $email = htmlspecialchars($_COOKIE['email']);

            // Display the received data
            echo "<h1>Received Data</h1>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
        } else {
            echo "<p>Form inputs are not set.</p>";
        }
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
</body>
</html>
