<?php
$dbconn = mysqli_connect("sql109.epizy.com","epiz_27074547","lXCT8DjDbdVj5JC","epiz_27074547_bloodbank");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>
