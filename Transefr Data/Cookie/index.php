<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD']== "POST"){
            if(isset($_POST['name']) && isset($_POST['email'])){
                $name = htmlspecialchars($_POST('name'));
                $email = htmlspecialchars($_POST('email'));
                setcookie("name", $name, time() + 86400, "/");
                setcookie("email", $email, time() + 86400, "/");

            }
        }
    ?>
</body>
</html>
