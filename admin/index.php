<?php
session_start();
error_reporting(0);

include"../configuration/db.php"; //db connection

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
//giving the logins from the signup
  $query = mysqli_query($con, "SELECT * FROM login WHERE username = '".$_POST['username']."' 
  AND password = '".$_POST['password']."'" );
  echo "login successful ";
  $user = mysqli_fetch_array($query);
  if($user > 0){
      //we are linking the login page and the dashboard
      $extra = "dashboard.php";
      $_SESSION['loginid']=$user['loginid'];
      $_SESSION['name']=$user['name'];
      $_SESSION['loggedin']=true;
      $_SESSION['password']=$user['password'];
      
      header("Location:$extra");
      exit();
  }
  // stay on the login page if the logins are not true
  else{
      header("Location:index.php");
      exit();
  }
} 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <title>LOGIN</title>
  </head>
  <body>
    <h2>ASSET REGISTER</h2>
    <div class="log_in">
      <h2>USER LOGIN</h2>
      <form method="post" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" /><br />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" /><br />

        <input type="submit" value="Log in" name="login" id="submit" />
      </form>
    </div>
    <!-- <script src="../scripts/login.js"></script> -->
  </body>
</html>