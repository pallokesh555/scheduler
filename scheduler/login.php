
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>LogIn</title>
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
        <div class="row ">
          <p>Log In</p>
        </div>
        <small class="form-text text-muted">New to Scheduler..</small>
                <a class="nav-link" href="register.php">Signup</a>
        <div class="row">
            <div class="col"><form action="validation.php" method="POST" >
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" required>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button> 
                
              </form></div>
            <div class="col c2">
              <img src="media/login.png" alt="">
            </div>
        </div>
    </div>
    
</body>
</html>



