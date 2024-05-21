<!-- process.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);   //depends on the name attribute of input element
        
        if (empty($name) || empty($email)) { // Check if either field is empty
            exit(); // Exit after sending the header
            header("Location: ./index.html");
        }
        else {
            echo "<h1>Received Data</h1>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
        }
    }
    else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
</body>
</html>
