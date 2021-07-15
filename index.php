
<?php
include 'incluides/header.php';
?>
    <!--Basic HTML-->
    <h1>Hello world php PRIMER</h1>
    <br>
    <?php
    /*HTML AND ECHO*/
        echo 'hello php!';
        echo '<br/>';
        echo 'second line';
        echo '<br/>';


    /* declaracion de variable*/
        $name = 'Daniel';
        $age = 21;
        /* variable */
        echo $name;
        echo '<h1> my name is: '.$name.'</h1>';
        echo '<h1> my age is: '.$age.'</h1>';
/* echo comillas dobles */
        echo "<h1> my name is: $name  </h1>";
        
   
?>
     <button type="button" class="btn btn-dark">CLICK ME</button>
     <?php
      require 'incluides/footer.php'
      ?>