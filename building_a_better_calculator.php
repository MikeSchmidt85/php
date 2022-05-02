<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="building_a_better_calculator.php" method="post">
    First Number: <input type="number" step="0.1" name="num1"> <br> 
    <!-- by adding a step="0.1 This allows us to do deciamls when typing in the numbers, but only to the tenth so example would be 4.5 or 5.3 -->
    OP: <input type="text" name="op"> <br>
    Second Number: <input type="number" step="0.1" name="num2"> <br>
    <!-- by adding a step="0.1 This allows us to do deciamls when typing in the numbers, but only to the tenth so example would be 4.5 or 5.3 -->
    <input type="submit">
    </form>

    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }else {
        echo "Invalid Operator";
    }

    ?>
</body>
</html>