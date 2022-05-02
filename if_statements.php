<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $isMale = false;
    $isTall = true;
    if($isMale && $isTall){ // You can put && for "and" or put || for "either or"
        echo "You are a tall male"; // Both are true
    } elseif($isMale && !$isTall){
        echo "You are a short male"; // $isMale is true && $isTall is false
    } elseif(!$isMale && $isTall){
        echo "You are a tall female";  // $isMale is false && $isTall is true
    } else {
        echo "You are a short female"; // Both are false
    }

    ?>
</body>
</html>