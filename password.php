<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="password.php" method="post"> 
        
        /* trying post method instead of get. The main difference is that you cannot see data in url hence protecting the data from the public*/

        Password: <input type="password" name="password"> <br>
        <input type="submit">

        <?php if(isset($_POST["password"]))echo $_POST["password"] ?? ''?>
    </form>
</body>
</html>