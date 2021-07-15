<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php primer if statements</title>
</head>
<body>
    <h1>if statements</h1>
    <?php 
        /*action based on the value of the <variable>*/
        echo '<h2> if statement</h2> ';

        $grade = 30;
// ==, >, <, <=, >=, ===
        if($grade >= 50){
            echo '<h3 style="color: green"> YO HAVE PASSED </h3>';
        }

        
        else{
            echo '<h3 style="color: red"> YO HAVE FAILED </h3>';
        }


        $grade = 'C';
        //if-else if-else

        if($grade == 'A' || $grade == ''){
            echo '<h2 style="color: green"> YOU ARE A SUPERSTAR </h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: red"> YOU ARE A TONTO </h2>';
        }
        else{
            echo '<h2 style="color: grey"> YOU ARE A DUMB.... </h2>';
        }
    ?>
<?php
        require 'incluides/footer.php'
        ?>