<?php
  if(isset($_POST['log-out'])){
    $logOut="You are successfully logged out";
    header("Location: ../views/loginview.php?loggedout=$logout");


  }


 ?>
