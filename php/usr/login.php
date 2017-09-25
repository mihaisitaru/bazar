<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/usr.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['userName'])){
	$userName = $_POST['userName'];
        //escapes special characters in a string
	/*$userName = mysqli_real_escape_string($con,$userName);*/
	$password = $_POST['password'];
	/*$password = mysqli_real_escape_string($con,$password);*/
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE upper(userName)= upper('$userName')
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row = mysqli_num_rows($result);
        if($row==1){
	    $_SESSION['userName'] = $userName;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>userName/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="userName" placeholder="userName" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>