<?php
require_once('config/constants.php');
/*require_once(__DIR__.'/./'._API_FOLDER.'/userApi.php');*/
?>

<html>
<head>
<title>work1</title>
</head>
<body>

<form action="/work1/api/userApi.php" method="GET"> 
    <input type="hidden" name='apiMethod' value="loginUser" />
    <input type="text" name="userName" placeholder="username" /> 
    <input type="password" name="password" placeholder="password" /> 
    <input type="submit" value="Login" /> 
</form>

</body>
</html>