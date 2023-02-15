<?php 
//Set a cookie to store login detail
setcookie("user","Mark",time()+86400,"/");

//Write a program to store the username in cookie and check whether the user have successfully login or not.
if (isset($_COOKIE['user'])) {

   echo "User is ".$_COOKIE['user'];
}else {

	echo "User is not logged in";
}

 ?>