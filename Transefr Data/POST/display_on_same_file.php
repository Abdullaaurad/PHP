<!DOCTYPE html>
<html>
<head>
    <title>Displaying User Input</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if (isset($_POST['name'])) {
        echo "Hello, " . $_POST['name'] . "!";
    }
    ?>
</body>
</html>
