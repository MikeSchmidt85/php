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

        // echo max(3, 5); // This will tell us which number is bigger

        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }
            elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
            }
            else {
            return $num3;
        }
    }

        echo getMax(3400, 3400, 516);

    ?>

</body>

</html>