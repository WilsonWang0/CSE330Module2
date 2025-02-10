<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h2>Calculation Result</h2>

    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operation"])) {
        $num1 = floatval($_GET["num1"]);
        $num2 = floatval($_GET["num2"]);
        $operation = $_GET["operation"];
        $result = 0;

        switch ($operation) {
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
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Error: Division by zero is not allowed.</p>";
                    exit();
                }
                $result = $num1 / $num2;
                break;
            default:
                echo "<p style='color:red;'>Invalid operation selected.</p>";
                exit();
        }

        echo "<p><b>Result:</b> $result</p>";
    } else {
        echo "<p style='color:red;'>Error: Missing input values.</p>";
    }
    ?>

    <br>
    <a href="calculator.html">Go back to Calculator</a>
</body>
</html>
