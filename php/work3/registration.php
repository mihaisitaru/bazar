<?php
require_once('config/general.php');
?>
<html>
<head>
<title>Create new account</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h3>Sign Up</h3>
<form action="<?php echo htmlspecialchars('/php/work3/api/user/signUpUser.php') ?>" method="POST">
    <ul type="none">
        <!--<li><input type="email" name="email" placeholder="Email address" />-->
        <span class=error>*required field</span>
        <li><input type="text" name="email" placeholder="Email address" /> <span class="error"><?php echo _ERROR_REQUIRED_STAR_FIELD_MSG;?></span>
        <input type="password" name="password" placeholder="Password" /> <span class="error"><?php echo _ERROR_REQUIRED_STAR_FIELD_MSG;?></span></li><br />
        <li><input type="text" name="fullName" placeholder="Full name" /> <span class="error"><?php echo _ERROR_REQUIRED_STAR_FIELD_MSG;?></span>
        <input type="password" name="passwordConfirm" placeholder="Confirm password" /> <span class="error"><?php echo _ERROR_REQUIRED_STAR_FIELD_MSG;?></span> </li><br />
        <input type="text" name="address" placeholder="Address" /><span class="error"><?php echo _ERROR_REQUIRED_STAR_FIELD_MSG;?></span></li>
        <li><input type="submit" value="Sign Up" />
        <input type="reset" value="Reset" /></li>
    </ul>
</form>

</body>
</html>