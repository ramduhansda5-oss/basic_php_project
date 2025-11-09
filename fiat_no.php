<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store and Display</title>
</head>
<body>
    <form method="post" action="">
        <P>Name: <input type="text" name="name"></P>
        <p>Roll No: <input type="number" name="num"></p>
        <input type="submit" name="submit" value="Display">

    </form>
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $rollno = $_POST["num"];

        echo "Name: .$name <br>";
        echo "Roll No: .$rollno";
    }
    
    ?>
</body>
</html>