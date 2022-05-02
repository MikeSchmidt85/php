<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mad_lib.php" method="get">

        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pluralNoun"><br>
        Person: <input type="text" name="person"><br>

        <input type="submit">
    </form>

    <?php

    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $person = $_GET["person"];

    echo "Rose are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $person <br>";

    ?>

</body>

</html>