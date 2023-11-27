<?php 
    // TASKS
    // 1. validate that the name has at least 2 words (there is a space)
    // 2. validate the email format
    // 3. validate that the age is an integer
    // 4. checkbox must be checked
    // 5. ---> print the errors :)

    $errors = [];
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $accept = $_POST['accept'] ?? '';

    if($_POST){
        if(count(explode(' ', $fullname)) < 2){
            $errors['fullname'] = 'Name should have at least 2 words';
        }

        if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'The email is not valid';
        }

        if(filter_var($age, FILTER_VALIDATE_INT) === false || $age < 0){
            $errors['age'] = 'The age should be an integer';
        }

        if(!filter_var($accept , FILTER_VALIDATE_BOOLEAN)){
            $errors['accept'] = 'checkbox must be checked';
        }

        if(count($errors) === 0){
            $person = [
                "fullname" => $fullname,
                "email" => $email,
                "age" => intval($age)
            ];
            $data = json_decode(file_get_contents('data.json'), true);
            $data[] = $person;
            file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
            header("list.php");

        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
            foreach($errors as $e){
                echo "<li>$e</li>";
            }
        ?>
    </ul>
    <form action="native.php" method="POST">
        Full Name: <input type="text" name="fullname" value="<?= $fullname ?>">
        <?= $errors['fullname'] ?? '' ?>
        <br>
        E-mail: <input type="text" name="email" value="<?= $email ?>"> 
        <?= $errors['email'] ?? '' ?>
        <br>
        Age(int): <input type="number" name="age" value="<?= $age ?>">
        <?= $errors['age'] ?? '' ?>
        <br>
        Accept the terms <input type="checkbox" name="accept" <?= $accept ? 'checked' : ''?>>
        <?= $errors['accept'] ?? '' ?>
        <br>
        <button>Submit</button>
    </form>

    <?php 
        if($_POST && count($errors) === 0){
            echo "<h1>Thank you for submitting the form</h1>";
        }
    ?>
</body>
</html>