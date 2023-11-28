<?php
    /* 
    The 2.php script is used to perform a simple calculation based on GET parameters. Validate the parameters using the criteria below and perform the calculation is everything is valid.
    The number parameter is required and must be an integer.
    The operation parameter is required and must be either square or cube.
    Display the list error messages if there was an error, or show the result if the input is valid.
    */
    $number = $_GET['number'] ?? '';
    $operation = $_GET['operation'] ?? '';
    $result = null;
    $errors = [];
    if($_GET){
        /*
        if(filter_var($number, FILTER_VALIDATE_INT) === false){
            $errors['number'] = "Number is required and must be an integer!";
        }
        */
        if(empty($number) || !is_numeric($number) || intval($number) != $number){
            $errors[] = "Number is required and must be an integer.";
        }
        if(empty($operation) || !in_array($operation, ['square', 'cube'])){
            $errors[] = "Operation is required and must be either square or cube.";
        }

        if(empty($errors)){
            $number = intval($number);
            if($operation == 'square'){
                $result = $number * $number;
            } else {
                $result = $number * $number * $number;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PHP TEST</title>
</head>
<body>
    <h1>PHP TEST - GROUP 5</h1>

    <h2>Task 2: Form input</h2>
    <form action="2.php" method="GET" novalidate>
        <label for="i1">Number:</label>
        <input type="text" name="number" id="i1" value="<?= $number ?>">
        <br>
        <label for="i2">Operation:</label>
        <input type="text" name="operation" id="i2" value="<?= $operation ?>">
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
        if(!empty($errors)){
            echo "<ul>";
            foreach($errors as $error){
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } elseif($result !== null){
            echo "<p>The {$operation} of {$number} is {$result} </p>";
        }
    ?>
</body>
</html>
