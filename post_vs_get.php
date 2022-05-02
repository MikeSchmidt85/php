<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="post_vs_get.php" method="post">
    Password: <input type="password" name="password" id="">
    <input type="submit">
</form>
<br><br>

<?php
    echo $_POST["password"]; // When we use POST instead of GET, the password wont be in the url
?>

    
</body>
</html>