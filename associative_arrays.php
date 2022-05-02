<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="associative_arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Submit">
    </form>

    <?php
    $grades = array("Mike" => "A", "Linda" => "B-", "Patrick" => "D+");
    echo $grades["Mike"];
    echo "<br>";
    echo $grades["Linda"];
    echo "<br>";
    echo count($grades);
    echo "<br>";
    echo $grades[$_POST["student"]]
    ?>
</body>

</html>