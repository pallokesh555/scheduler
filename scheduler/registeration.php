<?php
include('connection.php');
error_reporting(0);
  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];


$query = "INSERT INTO users (fname,lname,email,password) VALUES 
('$fname','$lname','$mail','$pass')";

$result = mysqli_query($conn,$query);


if($result){header('location:login.php');}else{die(mysqli_error($conn));}

?>