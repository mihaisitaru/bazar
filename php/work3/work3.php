<?php
require_once('config/general.php');

?>
<html>
<head>
<title>work3</title>
</head>
<body>
<h3>Login</h3>
<form action="<?php echo htmlspecialchars('/php/work3/api/user/loginUser.php') ?>" method="POST"> 
    <!--<input type="email" name="email" placeholder="Enter your email" /> -->
    <input type="text" name="email" placeholder="Enter your email" />
    <input type="password" name="password" placeholder="Enter your password" /> 
    <input type="submit" name="login" value="Login" /> 
</form>

<a href="/php/work3/registration.php"><h3>Sign Up</h3></a>
</body>
</html>