<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form action="" method="get">
        <label for="num1">num1 =</label>
        <input id="num1" name="number1" type="text" required>
        <label for="num2">num2 =</label>
        <input id="num2" name="number2" type="text" required>
        <label for="ope">Operator</label>
        <select id="ope" name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $num1 = htmlspecialchars($_GET['number1']);
            $num2 = htmlspecialchars($_GET['number2']);
            $operator = htmlspecialchars($_GET['operator']);
            if (empty($_GET['number1']) || empty($_GET['number2']) || empty($_GET['operator'])){
                exit();
            }
            else if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operator'])) {
                if (is_numeric($num1) && is_numeric($num2)) {
                    $num1 = (float)$num1;
                    $num2 = (float)$num2;
                    $result = "";

                    switch ($operator) {
                        case "add":
                            $result = $num1 + $num2;
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            break;
                        case "divide":
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                $result = "Division by zero error.";
                            }
                            break;
                        default:
                            $result = "Invalid operator selected.";
                            break;
                    }

                    echo "<p>Result: $result</p>";
                } else {
                    echo "<p>Please enter valid numbers.</p>";
                }
            }
        }
    ?>
</body>
</html>
