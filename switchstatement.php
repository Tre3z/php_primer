<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <h1>switch statement</h1>
    <?php 
        $grade = 'A';
        
        switch($grade){
            case 'A';
                echo '<h2 style="color: green"> yo are a superstar </h2>';
                break;
            case 'B';
                echo '<h2 style="color: red"> yo are a dumb </h2>';
                break;
            default:
                echo '<h2 style="color: blue"> yo are a tonto </h2>';
                break; 

        }
    
    
    ?>
<<?php
        require 'incluides/footer.php'
        ?>