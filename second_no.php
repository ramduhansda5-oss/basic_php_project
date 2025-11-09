<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmatic Operations</title>
</head>
<body>
    <div style="width: 400px; margin-top:200px; margin-left:530px; background-color:gray; text-align: center;"><br>
        <h2>Arithmetic Operations Using User Input</h2>

        <form method="post" action="">
            <p>Enter First Number: <input type="number" name="num1"></p>
            <p>Enter Second Number: <input type="number" name="num2"></p>

            <input type="submit" name="add" value="Add">
            <input type="submit" name="subtract" value="Subtract">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide">
            <input type="submit" name="modulus" value="Modulus">
            <input type="submit" name="exponent" value="Exponent">
        </form><br>

        <?php
        if (isset($_POST["add"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $add = $num1 + $num2;
            echo "<h3>$num1 + $num2 = $add</h3>";
        }
        if (isset($_POST["subtract"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $subtract = $num1 - $num2;
            echo "<h3>$num1 - $num2 = $subtract</h3>";
        }
        if (isset($_POST["multiply"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $multiply = $num1 * $num2;
            echo "<h3>$num1 * $num2 = $multiply</h3>";
        }
        if (isset($_POST["divide"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if ($num2 != 0)
            {
                $divide = $num1 / $num2;
            echo "<h3>$num1 / $num2 = $divide</h3>";
            }
            else{
                echo "<h3>Cannot divide by zero</h3>";
            }
        }
        if (isset($_POST["modulus"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if ($num2 != 0)
            {
                $modulus = $num1 % $num2;
            echo "<h3>$num1 % $num2 = $modulus</h3>";
            }
            else{
                echo "<h3>Cannot divide by zero</h3>";
            }
        }
        if (isset($_POST["exponent"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $exponent = $num1 ** $num2;
            echo "<h3>$num1 ^ $num2 = $exponent</h3>t";
        }
        ?>
    </div>
</body>
</html>
