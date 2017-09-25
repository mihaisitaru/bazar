<?php
require_once('config/general.php');

?>
<html>
<head>
<title>work2</title>
</head>
<body>

<form action="/php/work2/api/user/loginUser.php" method="POST"> 
    <input type="text" name="userName" placeholder="username" /> 
    <input type="password" name="password" placeholder="password" /> 
    <input type="submit" value="Login" /> 
</form>

</body>
</html>