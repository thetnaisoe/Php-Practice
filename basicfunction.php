<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basicfunction.php" method="get">
        <input type="number" name="num" value="<?php echo $_GET["num"]?>"> <br>
        <input type="submit">
    </form>
    <?php 

        $a = null;
        if(isset($_GET["num"]) && $_GET["num"] !== ""){
            $a = $_GET["num"];
        }

        if ($a !== null && $a == 4 ){
            echo "<br> <h1> x is 4 <h1> <br>";
        } elseif ($a !== null) {
            echo "<br> <h1> x is not 4 </h1> <br>";
        }

        for($i = 0; $i <= 9; $i++){
            echo "<br> $i <br>";
        }

        $u = [
            'a' => 3,
            'b' => 4,
        ];

        echo $u['a'];

        $zero = 0; //global scope
        function isEven($num){
            //return $num % 2 === $zero; //local scope 
            return $num % 2 === 0; 
        }

        echo isEven(5) ? "<br>true<br>" : "<br>false<br>";

        // EXERCISES
        // ARRAY OF NUMBERS
        // 1.) filter the even elements - find array functions :)
        $numbers = [1,2,3,4,5,6,7,8,9,10];

        $even = array_filter($numbers, function($num){
            return $num % 2 == 0;
        });

        echo "<br>";

        print_r($even); //Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 ) #keeps the original keys from $numbers array

        echo "<br>";

        $even = array_values($even); //re-indexes the array

        echo "<br>";

        print_r($even); //Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

        echo "<br>";
        // 2.) calculate the square of each element - find array functions :)

        /*
        $squared = array_map($numbers, function($num){
            return $num * $num;
        });
        wrong order of attributes. function first
        */

        $squared = array_map(function($num){
            return $num * $num;
        }, $numbers);

        echo "<br>";

        print_r($squared);

        echo "<br>";

        $odd = array_filter($numbers, function($num){
            return $num % 2 != 0;
        });

        $odd = array_values($odd);

        $odd = array_map(function($num){
            return $num * $num;
        }, $odd);

        echo "<br>";
        print_r($odd);
        echo "<br>";
    
        // 3.) display it as a list (ul - li) - try alternative syntax

        echo "<ul>";
        foreach($odd as $num){
            echo "<li>$num</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>