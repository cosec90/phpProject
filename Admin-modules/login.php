<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';


if(isset($_POST['login-submit'])){

  $username=$_POST['username'];
  $password=$_POST['password'];
  $login= login($username,$password);
  }
  else {
    echo "error1";
  }
  if(isset($_POST['forgot-submit'])){
    $username=$_POST['username'];
    $forgot= FORGOT_PASS($username);
  }
  else{
    echo "error2";
  }
  if(isset($_POST['sign-up'])){
    header("Location: ../views/index.php");
  }
  else{
    echo "error5";
  }

 ?>
