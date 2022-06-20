<?php
session_start();

if(isset($_SESSION['name'])){
}else{header('location:login.php');}

$Uid = $_SESSION['id'];

include("connection.php");
error_reporting(0);

$query ="SELECT * FROM s_event WHERE userid='$Uid'";
$result = mysqli_query($conn,$query);
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($output);
//echo"<pre>";
//print_r($output);
//echo"</pre>";
?>