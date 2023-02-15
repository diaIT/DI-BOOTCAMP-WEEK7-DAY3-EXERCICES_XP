<?php 
//Start a PHP session
session_start();

//Set Session variables using PHP global variable.
$_SESSION['user']="admin";
$_SESSION['password']="password";

//Display the variables on the page
echo "Usermane: ".$_SESSION['user']."<br>"; 
echo "password: ".$_SESSION['password'];

 ?>