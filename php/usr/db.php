<?php
// Enter your Host, userName, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","mihaisitaru","","bazar_online_shop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }