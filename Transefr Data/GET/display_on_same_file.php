<!DOCTYPE html>
<html>
<head>
    <title>Displaying User Input</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if (isset($_GET['name'])) {
        echo "Hello, " . $_GET['name'] . "!";
    }
    ?>
</body>
</html>
