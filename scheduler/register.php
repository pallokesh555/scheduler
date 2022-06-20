
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>SignUp</title>
    <style>
      p{
    color:plum;
    text-align: center;
    font-size: 100px;
    
   
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row"><p>Sign Up</p></div>
        <small class="form-text text-muted">Already have an account on Scheduler..</small>
                <a class="nav-link" href="login.php">Log in</a>
        <div class="row">
            <div class="col">
                <form action="registeration.php" method="POST">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control"  name="fname" placeholder="Enter Your First Name:" required>
                  
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter Your Last Name:">
        
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" required >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form></div>
            <div class="col"><img src="media/signup.png"></div>
        </div>
    </div>
    
</body>
</html>
