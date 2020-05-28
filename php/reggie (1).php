<?php
error_reporting(0);
//session_start();

$error="";
$display="";
$error2="";
$display2="";
$connection = mysql_connect("sql105.lockernerd.co.uk", "username", "password");
$db = mysql_select_db("lnw_17056803_tedxrc", $connection);
if(isset($_POST['submit']))
{


  $x=1;
  if(empty($_POST['sender_name']) ||empty($_POST['sender_email']) ||empty($_POST['company']) ) {
    $error = "Fill all the marked fields.";  
//echo  "FUCL";
  }
  else
  { 
    $sender_name=$_POST['sender_name'];   
    $sender_phone=$_POST['sender_phone'];   
    $sender_email=$_POST['sender_email'];   
    $company=$_POST['company'];   
    $role=$_POST['role'];   
    $noname1=$_POST['noname1'];   
    $noname2=$_POST['noname2'];   
    $explain=$_POST['explaintedx'];
    $link=$_POST['linktedx'];
    $about=$_POST['about'];
    if(empty($_POST['sender_phone']) ) {
      $sender_phone = "0"; 
    }
    if(empty($_POST['noname2']) ) {
      $noname2 = "null"; 
    }
    $sender_phone = stripslashes($sender_phone);
    $sender_phone = mysql_real_escape_string($sender_phone);
    $sender_name = stripslashes($sender_name);
    $sender_name = mysql_real_escape_string($sender_name);
    $sender_email = stripslashes($sender_email);
    $sender_email = mysql_real_escape_string($sender_email);
    $company = stripslashes($company);
    $company = mysql_real_escape_string($company);
    $role = stripslashes($role);
    $role = mysql_real_escape_string($role);
    $noname1 = stripslashes($noname1);
    $noname1 = mysql_real_escape_string($noname1);
    $noname2 = stripslashes($noname2);
    $noname2 = mysql_real_escape_string($noname2);
    $explain = stripslashes($explain);
    $explain = mysql_real_escape_string($explain);
    $link = stripslashes($link);
    $link = mysql_real_escape_string($link);
    $about = stripslashes($about);
    $about = mysql_real_escape_string($about);
     
    $query = mysql_query("SELECT * FROM attendees where sender_email='$sender_email'", $connection);
    $rows = mysql_num_rows($query);
    if($rows==0){
      //echo "INSERT INTO attendees (sender_name,sender_email,sender_phone,company,role,noname1,noname2,link,explan,about) VALUES ('$sender_name','$sender_email','$sender_phone','$company','$role','$noname1','$noname2','$link','$explain','$about')";
      mysql_query("INSERT INTO attendees (sender_name,sender_email,sender_phone,company,role,noname1,noname2,link,explan,about) VALUES ('$sender_name','$sender_email','$sender_phone','$company','$role','$noname1','$noname2','$link','$explain','$about')", $connection);
      header('Location: http://turington.in/success.html');
    }
    else {
//header('Location: https://google.com');

      header('Location: http://turington.in/');
    }
    

  } 
  
  
}
else {
echo "Please Re-Submit the form again. There is some network issue";
      echo "<a href='http://turington.in/'> Resubmit</a>";
    }
?>			