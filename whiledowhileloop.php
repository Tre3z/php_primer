<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loop</title>
</head>
<body>
<h1>while loop</h1>
<?php 
    $grade = '0';
    /*/infinite loop
    while($grade < 10){
        echo '<p>I AM LESS THAN 10</p>';
    }
*/
//pre condition loop
    while($grade < 10){
        echo '<p>I AM LESS THAN 10</p>';
        $grade++;
    }
    echo 'EXIT LOOP!'
    
?>
<h1>do-while loop</h1>
    <?php 
    //post condition loop
    $grade = '0';
    do{
        echo '<p>I AM DO WHILE LOOP </p>'; 
        $grade++;
    }while ($grade < 10);
    echo 'EXIT LOOP!'
    
    ?>
<?php
        require 'incluides/footer.php'
        ?>