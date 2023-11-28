<?php 
    /* The JSON file named 3.json is used to store records that have two fields: a name (called fullname) and an integer (called count). (The starting package includes the Storage helper class: it can be used, but it's not mandatory.)
    Load the contents of 3.json into an associative array.
    Display the contents of the file/array on the page.
    When the link at the bottom of the page is clicked, add a new entry to the file with your own name and a random integer.
    */
    $data = json_decode(file_get_contents('3.json'), true);

    if(isset($_GET['insert'])){

        $name = [
            'fullname' => 'Soe Thet Naing',
            'count' => rand(1, 100)
        ];
        
        $data[] = $name;
        file_put_contents('3.json', json_encode($data, JSON_PRETTY_PRINT));
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

    <h2>Task 3: File storage (3 pts)</h2>
    <?php foreach($data as $item): ?>
        <p><?= $item['fullname'] ?>: <?= $item['count'] ?></p>
    <?php endforeach; ?>

    <br><a style="color:green; font-weight: bold;" href="3.php?insert=1">Insert my record</a>
</body>
</html>
