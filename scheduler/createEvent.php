<?php
session_start();
include("connection.php");
error_reporting(0);



if(isset($_SESSION['id'])){
  
}else{header('location:login.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">  
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body><div class="container">
    <div class="row"></div>
    <div class="row r2">
    <div class="col-2 nav">
    
                <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="upload.php">CREATE EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">LOGOUT</a>
  </li>
  
</ul>
               
    </div>
               
                <form  class="col-8 eventForm" action="" method="GET" >
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" class="form-control" name="ename" placeholder="Enter Your First Name:" required>
                  
                  </div>
                  <div class="form-group">
                    <label>Event Description</label>
                    <input type="text" class="form-control" name="desc" placeholder="Enter about Your Event Description:">
        
                  </div>
                 <!-- <div class="form-group">
                    <label>Select Day</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="day">
                      <option>Monday</option>
                      <option>Tuesday</option>
                      <option>Wednesday</option>
                      <option>Thursday</option>
                      <option>Friday</option>
                      <option>Saturday</option>
                      <option>Sunday</option>
                    </select>
                  </div> -->
                  <div class="form-group">
                    <label>select Date :</label>
                    <input type="date" class="form-control" name="date" required>
                   
                  </div>
                  <div class="form-group">
                    <label>start Time:</label>
                    <input type="time" class="form-control" name="stime" required >
                   
                  </div>
                  <div class="form-group">
                    <label>End Time:</label>
                    <input type="time" class="form-control" name="etime" required>
                   
                  </div>
                  
                  
              
                <button type="submit" class="btn btn-primary">Create Event</button>
              </form>
               
    </div>
</div>
    
</body>
</html>
<?php
$ename = $_GET['ename'];
$desc  = $_GET['desc'];
$date  = $_GET['date'];
$stime = $_GET['stime'];
$etime = $_GET['etime'];
$time  = $stime." - ".$etime;
$color = "#63d867";
$event = " event";
$uid=$_SESSION['id'];


$q = "INSERT INTO s_event (name,description,date,type,badge,color,userid) VALUES ('$ename','$desc','$date','$event','$time','$color','$uid')";
$res=mysqli_query($conn,$q);


if($res){header('location:index.php');}



?>