<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement Operator</title>
</head>
<body>
    <div style="width:400px; margin:auto; background-color:yellow; text-align:center;">
    <h2>Increment and Decrement Operators in PHP</h2>

        <form method="post" action="">
            <p>Enter a Number: <input type="number" name="num" required></p>
            <input type="submit" name="submit" value="Show Result">
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $num1 = $_POST["num"];
            $num2 = $_POST["num"];

            echo "<h3>Original Number: $num1</h3>";

            $preInc = ++$num1;
            echo "After Pre-Increment (++num): $preInc <br>";
            $postInc = $num1++;
            echo "After Post-Increment (num++): $postInc <br>";
            echo "Value after Post-Increment executed: $num1 <br><br>";
            $preDec = --$num2;
            echo "After Pre-Decrement (--num): $preDec <br>";
            $postDec = $num2--;
            echo "After Post-Decrement (num--): $postDec <br>";
            echo "Value after Post-Decrement executed: $num2 <br>";
        }
        ?>
    </div>
</body>
</html>