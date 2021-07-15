<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>STRINGS

    </h1>
    <?php
        //concatenation
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "daniel reyes";
        echo $phrase1 . ", named tiffany, ". $phrase2;
        echo '</br>';
        echo '<hr/>';
        //string transformation 
        echo 'uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'upper case: '. strtoupper($name).' </br>';
        echo 'lower case: '. strtolower("THIS WAS ALL UPPER CASE").' </br>';
        echo '<hr/>';
        echo 'repeat string: ' . strtoupper(str_repeat('a',100)) . '</br>';
        echo 'get a substring: ' . substr($name, 1, 8). '</br>';

        echo 'get a position: ' . strpos($name, 'i'). '</br>';

        //----------

        echo 'find character "r": ' . strchr($name, 'r'). '</br>';
        echo 'find character "a": ' . strchr($name, 'a'). '</br>';
        echo 'find character "d": ' . strchr($name, 'd'). '</br>';
        echo 'find character "l": ' . strchr($name, 'l'). '</br>';

        ?>

        <?php
        require 'incluides/footer.php'
        ?>