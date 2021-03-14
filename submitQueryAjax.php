<?php
    
$name=$_POST['name'];
$fromEmail=$_POST['fromEmail'];
$query=$_POST['query'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($query,70);

// send email
mail("bipintarmali88@gamil.com","Query on VOAD architect",$msg);

?>