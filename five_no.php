<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reletional Operator</title>
</head>
<body>
    <div style="width: 400px; margin-top:100px; margin-left:530px; background-color:gray; text-align: center;" >
        <h1>Reletional Between User Input</h1>
        <form method="post" action="">
            <label for="firstinput">Enter first input</label>
            <input type="number, text" id="firstinput" name="input1"><br><br>
            <label for="secondinput">Enter second input </label>
            <input type=" number, text" id="secondinput" name="input2"><br><br>
            <input type="submit" name="submit" value="compare">
        </form>
        <?php
        if (isset($_POST["submit"]))
        {
            $input_1 = $_POST["input1"];
            $input_2 = $_POST["input2"];

            echo" <h3>Equal to</h3>";
            if ($input_1 == $input_2)
            {
                echo"<h3>Value: $input_1 and $input_2 is Equal</h3>";
            }
            else {
                echo"<h3>Value: $input_1 and $input_2 is not Equal</h3> ";
            }

            echo"<h3>Identical</h3>";
            if ($input_1 === $input_2)
            {
                echo"<h3>Value: $input_1 and $input_2 is Equal</h3>";
            }
            else{
                echo"<h3>Value: $input_1 and $input_2 is not Equal</h3>";
            }

            echo"<h3>Not Identical</h3>";
            if ($input_1 !== $input_2)
            {
                echo "<h3>Value: $input_1 and $input_2 is not Equal</h3>";
            }
            else {
                echo"<h3>Value: $input_1 and $input_2 is Equal</h3>";
            }

            echo "<h3>Less than and greater than</h3> ";
            if ($input_1 < $input_2 and $input_1 != $input_2 and $input_1 !== $input_2)
            {
                echo"<h3>Value: $input_1 is Less than $input_2</h3>";
            }
            elseif ($input_1 > $input_2 and $input_1 != $input_2 and $input_1 !== $input_2)
            {
                echo"<h3>Value: $input_1 is Greater than $input_2</h3>";
            }
            else {
                echo"<h3>Value: $input_1 and $input_2 is Equal</h3>";
            }
            
        }
        ?>
    </div>
</body>
</html>