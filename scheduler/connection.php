<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'schedule';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
   //echo"done";
}
else{
    echo"con failed";
}

?>