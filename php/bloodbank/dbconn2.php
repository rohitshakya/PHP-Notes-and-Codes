<?php
$dbconn = mysqli_connect("sql305.epizy.com","epiz_27077884","8hS4l7I92NFzK","bloodbank");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>
