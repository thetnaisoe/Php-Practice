<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="madlib.php" method="get">
        Color: <input type="text" name="color" value="<?php echo $_GET["color"] ?>"> <br>
        Plural Noun: <input type="text" name="pluralNoun" value="<?php echo $_GET["pluralNoun"]?>"> <br>
        Celebrity: <input type="text" name="celebrity" value="<?php echo $_GET["celebrity"]?>"> <br>

        <input type="submit">
    </form>

    <?php 

        print_r($_GET); 

        if(isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])){
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "<br>Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>"; 
        }
    ?>

</body>
</html>