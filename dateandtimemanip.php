<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date and time manip</title>
</head>
<body>
<?php
      $datenow = getdate();
    echo "today's date <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . "<br/>";
    echo $datenow['year'] . "<br/>";


    echo "today's date: " .  $datenow['mon']. '/'.  $datenow['mday'] . '/'.  $datenow['year']; 
    echo "<br/>";

    echo time() . '<br/>';

    print date("m/d/y G.i:s<br>", time()) . '<br/>';
    print "today is: ";
    print date("j of F Y, \a\\tt g.i a", time());

?>

<?php
require 'incluides/footer.php'
?>