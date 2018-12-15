<?php


error_reporting(0);
function signup($x,$y,$user,$pass){
	include '../Admin-config/connection.php';
	$sql = "Insert into login (Name,Email,Username,pass) values ('".$_POST['name']."','".$_POST['email']."','".$_POST["username"]."','".$_POST["password"]."')";
	$result=mysqli_query($con,$sql);

	if ($result) {
		header("Location: ../views/loginview.php");
	}

}

function login($l,$y){
	include '../Admin-config/connection.php';
     $sql="select * from `login` where `Username` ='$l' AND `pass` ='$y'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		 if($count==1){
  	 		header("Location: ../views/home.php?username=$l");
	}
	else {
		echo "error2";
	}
}

function change($oldpassword){
		include '../Admin-config/connection.php';
		$sql="Select * from login where pass='$oldpassword'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		$db_pass=$row['pass'];
		return($db_pass);
	}

	function UPDATE($oldpassword,$passwordCheck){
		include '../Admin-config/connection.php';
		$sql="Update login set pass='$passwordCheck' where pass='$oldpassword'";
		$result=mysqli_query($con,$sql);
	}

	function FORGOT_PASS($username){
		header("Location: ../views/forgot.php?user=$username");
	}
	function CHANGE_PASS($username,$confirm_pass){
			include '../Admin-config/connection.php';
			$sql="Update login set pass='$confirm_pass' where Username='$username'";
			$result=mysqli_query($con,$sql);
			echo "success";
			header("Location: ../views/home.php?username=$username");
	}








?>
