<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch_statements.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">

    </form>
    
    <?php

    $grade = $_POST["grade"];
    echo $grade;
    echo "<br>";
    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You could of done better";
            break;
        case "D":
            echo "You did very bad!";
            break;
        case "F":
            echo "You FAILED!";
            break;
        default:
        echo "Invalid Grade";

    }
    ?>
</body>
</html>