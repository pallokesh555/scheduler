<?php

session_start();
include("connection.php");
error_reporting(0);





$mail = $_POST['mail'];
$pass = $_POST['pass'];



$query = "SELECT * FROM users WHERE email = '$mail' and password = '$pass'";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0){
    header('location:login.php');}
    else{

        $user_data =mysqli_fetch_assoc($result); 
        $_SESSION['id']=$user_data['id'];
        $_SESSION['name']=$user_data['fname'];



        header('location:index.php');

    }




?>