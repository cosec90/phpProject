<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';


if(isset($_POST['login-submit'])){
	$username = $_POST['user'];
  $oldpassword=$_POST['oldpassword'];
  $password=$_POST['password'];
  $passwordCheck=$_POST['repeatpassword'];
  $change = change($oldpassword);
	if($change != $oldpassword){
		header("Location: ../views/changePassword.php?error=InvalidInput");
	}
	else{
		if($password!=$passwordCheck){
			header("Location: ../views/changePassword.php?error=matchingerror");
		}
		else{
			$update= UPDATE($oldpassword,$passwordCheck);
		}
	}
}
else{
	echo "Error";
}



 ?>
