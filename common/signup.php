<?php include("header.php") ?>
<?php include("../config/connection.php"); 



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
<section id="form">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="heading-color">FORM</h6>
              <h1>Register now</h1>
            </div>
          </div>
          <form action="signup.php" method="POST" class="row g-4 justify-content-center">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter password"  name="password">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Confirm password" name="confirmpassword" >
            </div>
            
            <div class="col-md-10 d-grid ">
              <button  type="submit" name="submit" class="btn primary-btn">Sign up</button>
            </div>
          </form>
        </div>
      </section>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
    $res=mysqli_query($conn,"insert into user_registration VALUES (NULL,'$name','$email','$password','$confirmpassword')");
    if(mysqli_query($conn,$res)){
        echo "connected succesfully";
    }
    echo "error".$res."<br>".mysqli_error($conn);
    mysqli_close($conn);
}
?>
