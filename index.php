<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Session</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5>Login Here</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                          </div>   
                          <div class="card-footer">
                            <input type="submit" value="Login" name="save" class="btn btn-primary col-lg-12">
                          </div>          
                    </form>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php
include ('connection.php');
session_start();
if (isset($_POST['save'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    $num=mysqli_num_rows($login);
    $data=mysqli_fetch_array($login);
    if ($num > 0) {
       $_SESSION['username']=$data['username'];
       $_SESSION['password']=$data['password'];
       header('location: dashboard.php');
    }else {
        echo "<script> alert('Incorrect Username Or Password')</script>";
    }
}
?>