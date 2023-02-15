
//Start a new PHP file and call it “session_exercise.php.

 <!DOCTYPE html>
 <html>
 <body>

<!--Create a form that allows the user to enter their name. The form should have a text input field and a submit button.-->
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  	<input type="text" name="name"> <br> <br>
  	<input type="submit" name="submit">
  	<input type="submit" name="logout" value="logout">

  </form>
<?php 
//Begin the PHP code by calling the session_start() function to start a new session.

 session_start();
 $name=$_POST['name'];
 $_SESSION['name']=$name;

if (isset($_POST['submit'])) {
	$_SESSION['name']=$_POST['name'];

    echo "Welcome ".$_SESSION['name'];
}

// the logout button by clicking it and verifying that the welcome message is no longer displayed.
if (isset($_POST['logout'])) {
	session_destroy();
	$_SESSION['name']="";
}

 ?>
 </body>
 </html>