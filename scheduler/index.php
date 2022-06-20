<?php
session_start();
include("connection.php");
error_reporting(0);



if(isset($_SESSION['id'])){
  
}else{header('location:login.php');}

?>
<html>
    <head>
        <title>Sheduler</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" type="text/css" href="calanderStyle.css"/>
        <link rel="stylesheet" type="text/css" href="theme.css"/>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row"></div>
            <div class="row">
            <div class="nav">
                <ul class="nav flex-column">
   <li class="nav-item"><p id="userName">hii..<?php echo $_SESSION['name']?></p></li>                 
  <li class="nav-item">
    <a class="nav-link active" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="createEvent.php">CREATE EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">LOGOUT</a>
  </li>
  
</ul>
                </div>

            <div id="calendar"></div>
            </div>
        </div>


        
        <script src="jquery.js"></script>
        <script src="calanderJs.js"></script>

        <script>
            var fdata;

            $.ajax({
                 url : "fetch-json.php",
                type : "POST",
                dataType: "JSON",
               
               success : function(data){
                    fdata = data; 

                    fdata.forEach(obj =>{           // remove unwanted keys from json array of obj
                        delete obj['userid'];
                    });
                   
                    console.log(fdata);
                }});


               
                



           /* $.getJSON(
                "fetch-json.php",
                function(data){
                    fdata = data; 
                    console.log(fdata);
                }
            );*/
        
        $(document).ready(function() {
            $('#calendar').evoCalendar({

             //   theme : "Midnight Blue",

                calendarEvents:fdata
                
            })
        })
        </script>

    </body>
</html>































<!--   @Dveloped by lokesh_pal    >