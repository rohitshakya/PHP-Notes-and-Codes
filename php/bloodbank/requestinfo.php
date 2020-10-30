<?php
// including the database connection file
    session_start();
    include("../config/dbconn.php");
    $a=$_SESSION['email'];
    $b=$_SESSION['bloodsample'];
    $c=$_SESSION['hospital_name'];

    switch ($_GET['link'])
{
case "0":
print "You pressed Button 1";
break;
case "1":
print "You pressed Button 2";
break;
case "2":
print "You pressed Button 3";
break;
}




    if($_SESSION['var']!=="Requested")
    {
           $query = "INSERT INTO request (request_name, request_hospital_name,request_blood_type) 
                VALUES ('$a','$b','$c')";
            $result = mysqli_query($dbconn,$query);
            if($result)
            {
                echo "<font color='green'>Succesfully inserted up!</font><br/>";
                //header("Location: ./request-available-sample.php");
            }
        }
        $_SESSION['var']="Requested";
        //header("Location: ./request-available-sample.php");
?>
