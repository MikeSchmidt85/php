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
        function cube($num){

            return $num * $num * $num;
            echo "Hello"; // This wont run because the return goes and it exited the function before its run

        }

        $cubeResult = cube(4);
        echo $cubeResult;

        // This will print out 4 cubed which is 64

        function add($num2){

            return $num2 + $num2;
        }

        $addResult = add(5);
        echo $addResult;

        
    ?>
</body>
</html>