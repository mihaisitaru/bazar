<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/usr.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['userName'])){
        
	$userName = $_POST['userName'];
        //escapes special characters in a string
	/*$userName = mysqli_real_escape_string($con, $userName); */
	$password = $_POST['password'];
	/*$password = mysqli_real_escape_string($con,$password);*/
	$first_name = $_POST['first_name'];
	/*$first_name = mysqli_real_escape_string($con, $first_name); */
	$last_name = $_POST['last_name'];
	/*$last_name = mysqli_real_escape_string($con, $last_name); */
	$email = $_POST['email'];
	/*$email = mysqli_real_escape_string($con,$email);*/
	$creation_dateUTC = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (userName, password, first_name, last_name, email, creation_dateUTC)
VALUES ('$userName', '$password', '$first_name', '$last_name', '$email', '$creation_dateUTC')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="userName" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="first_name" placeholder="First name" required />
<input type="text" name="last_name" placeholder="Last name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>