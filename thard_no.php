<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmatic Operations</title>
</head>
<body>
    <div style="width:400px; margin:auto; background-color:yellow; text-align:center;"><br>
        <form method="post" action="">
            <label for="firstnumber">Enter First Number</label>
            <input type="number" id="firstnumber" name="num1"><br><br>
            <label for="secondnumber">Enter Second Number</label>
            <input type="number" id="secondnumber" name="num2"><br><br>
            <input type="submit" name="submit" value="operation">
        </form>
        <?php
        if(isset($_POST["submit"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $add = $num1 + $num2;
            $subtract = $num1 - $num2;
            $multiply = $num1 * $num2;
            if ($num2 != 0)
            {
                $divide = $num1 / $num2;
                $modulus = $num1 % $num2;
            }
            else
            {
                echo "Cannot divite zero.";
            }
            
            $exponent = $num1 ** $num2;

            echo "<h3>Additon: $num1 + $num2 = $add</h3>";
            echo "<h3>Subtraction: $num1 - $num2 = $subtract</h3>";
            echo "<h3>Multiply: $num1 * $num2 = $multiply</h3>";
            echo "<h3>Divide: $num1 / $num2 = $divide</h3>";
            echo "<h3>Modulus: $num1 % $num2 = $modulus</h3>";
            echo "<h3>Exponent: $num1 ^ $num2 = $exponent</h3>";
        }
        ?>
    </div>
</body>
</html>