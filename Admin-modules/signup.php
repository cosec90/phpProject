<?php

include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';


if(isset($_POST['login-submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];


  $signup = signup($name,$email,$username,$password);
}
else
{
  header("Location: ../views/index.php?error=loginerror");
}













 ?>
