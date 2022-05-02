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

        $friends = array("Anton", "Patrick", "Linda", "Chonga");
        $friends[1] = "Mikey";
        $friends[3] = 400;
        $friends[5] = "Steph";
        echo $friends[1];
        echo "<br>";
        echo $friends[3];
        echo "<br>";
        echo $friends[5];
        echo "<br>";

        echo count($friends);

    ?>


</body>

</html>