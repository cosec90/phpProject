<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';

if(isset($_POST['confirm'])){
  $username=$_GET['username'];
  $new_pass=$_POST['new_pass'];
  $confirm_pass=$_POST['confirm_pass'];
  if($new_pass == $confirm_pass){
      $change_pass=  CHANGE_PASS($username,$confirm_pass);
  }
  else{
    echo "error7";
  }
}




 ?>
