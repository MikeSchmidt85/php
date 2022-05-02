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

    $phrase = "Giraffe Academy"; // $phrase is a variable

    echo strtolower($phrase); // strtolower makes the entire world lower case
    echo strtoupper($phrase); // strtoupper makes the entire world upper case
    echo strtoupper("dog");   // You can place regular strings in them as well
    echo strlen($phrase);     // strlen measure the length of the string, in this case itl print out 15
    echo $phrase[0];          // By using the [0] square brackets, it will tell us what index it id, is this case it will print G
    echo "Mike"[0];           // By using the [0] square brackets, it will tell us what index it id, is this case it will print G
    $phrase[0] = "B";         // This replaces the zero index with B
    echo $phrase;             // So this will print out Biraffe Academy

    ?>

    <?php

echo str_replace("Giraffe", "Panda", $phrase); // This will replace Giraffe with Panda
echo $phrase;

echo substr($phrase, 8, 3);

    ?>

</body>

</html>