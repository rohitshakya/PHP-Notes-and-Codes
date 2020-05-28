<?php
$servername = "sql308.lockernerd.co.uk";
$dbusername = "lnw_19351780";
$password = "cpbk0g8q";
$dbname="lnw_19351780_turington";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];//////

// Create connection
$conn = new mysqli($servername, $dbusername, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$query = "INSERT INTO form (name, email, message) VALUES
    ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["message"] . "')";
    if ($conn->query($query)===TRUE){
      echo "Record!!";
      echo $name;
      echo $email;
      echo $message;

    }
    else {
      echo "Error:" .$query ."<br>" . $conn->error;
    }

    $conn->close();

?>
		