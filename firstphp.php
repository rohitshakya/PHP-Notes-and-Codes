<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname="index1";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];/////////index1=database,primary1=table

// Create connection
$conn = new mysqli($servername, $dbusername, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$query = "INSERT INTO primary1 (name, email, message) VALUES
    ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["message"] . "')";
    if ($conn->query($query)===TRUE){
      echo "Record!!";
    }
    else {
      echo "Error:" .$query ."<br>" . $conn->error;
    }

    $conn->close();

?>



<form action="" method="POST">
  Name:<br>
  <input type="text" name="name" value="">
  <br>
  Email:<br>
  <input type="text" name="email" value="">
  <br><br>

  Message:<br>
  <input type="text" name="message" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button</p>