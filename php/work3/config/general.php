<?php
session_start();
require_once(__DIR__.'/constants.php');
?>

<?php
require_once(__DIR__.'/../'._LIB_FOLDER.'/databaseHelper.php');
databaseConnect();