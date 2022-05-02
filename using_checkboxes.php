<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="using_checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" id="" value="apples"><br>  
        Bananas: <input type="checkbox" name="fruits[]" id="" value="bananas"><br>  
        Oranges: <input type="checkbox" name="fruits[]" id="" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" id="" value="pears"><br> 
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        echo $fruits[1];
        echo $fruits[2];
    ?>

</body>
</html>