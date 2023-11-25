<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="number" name="num1" value="<?php echo $_GET["num1"]?>"> <br>
        <input type="number" name="num2" value="<?php echo $_GET["num2"]?>"> <br>

        <input type="submit"> <br>

        Answer : <?php echo $_GET["num1"] + $_GET["num2"]?>

    </form>
</body>
</html>