<?php
    $cell_classes = [
        ['eligendi', 'deserunt', 'eligendi', 'deserunt', 'pariatur', 'pariatur', 'pariatur'],
        ['eligendi', 'deserunt', 'eligendi', 'deserunt', 'deserunt', 'deserunt', 'pariatur'],
        ['eligendi', 'eligendi', 'eligendi', 'deserunt', 'pariatur', 'pariatur', 'pariatur'],
        ['deserunt', 'deserunt', 'eligendi', 'deserunt', 'pariatur', 'deserunt', 'deserunt'],
        ['deserunt', 'deserunt', 'eligendi', 'deserunt', 'pariatur', 'pariatur', 'pariatur'],
    ];

    /* 
    The 1.php file in your starter pack already contains the two-dimensional array $cell_classes which contains CSS class names that already exist in the given CSS starter file. Answer the following questions programmatically based on the content of the array. Your solution must give the correct result even if the data changes but the structure remains.
    Display the dimensions of the array (e.g. 7 × 3). You can assume that all inner arrays are the same length.
    Count how many times the string 'deserunt' appears in $cell_classes.
    Generate a table that has the same dimensions as the array, and the cells contain the coordinates. (See image below.)
    Set the class attribute of each cell to match the values in the array. (For example: if $cell_classes[3][0] is quid, then the cell at the 1st column of the 4th row should be declared as <td class="quid">.)
    */

    $rows = count($cell_classes);
    $cols = count($cell_classes[0]);

   
    $deserunt_count = 0;
    foreach ($cell_classes as $row) {
        foreach ($row as $value) {
            if ($value === 'deserunt') {
                $deserunt_count++;
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

    <h2>Task 1: Output generation from array (4 pts)</h2>

    Array dimensions: <b><?= $rows ?> x <?= $cols ?></b>
    <br>
    Total number of <i>deserunt</i> values: <b><?= $deserunt_count ?></b>

    <table>
        <?php 
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $classValue = $cell_classes[$i][$j];
                    echo "<td class='{$classValue}'>" . ($i + 1) . ($j + 1) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
