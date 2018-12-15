<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>Document</title>
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark ">
  <div class="navbar-brand">
    Lorem
  </div>
  <div class="navbar-order">
<ul class="navbar-nav">
  <li class="nav-item welcome">
    Welcome  <?php echo $_GET['x'];?>
    </li>
</ul>
</div>
</nav>
<div class="container-fluid">
<div class="form-container">
<p>change password for <?php echo $_GET['x'];?></p>
<form class="" action="../Admin-modules/changePassword.php" method="post">
<div class="form-group">
  <label class="pass">Old password</label><br>
  <input type="text" class=" input" placeholder="Old password" name="oldpassword" required>
</div>
<div class="form-group">
  <label class="pass">New password</label><br>
  <input type="password" class="input" placeholder="New password" name="password" required>
</div>
<div class="form-group">
  <label class="pass">Repeat password</label><br>
  <input type="password" class=" input" placeholder="Repeat password" name="repeatpassword" required>
</div>
<div class="form-group">
  <input type="hidden" name="user" value="<?php echo $_GET['x'];?>">
</div>
<div class="button-container">
<button type="submit" class="btn form-button" name="login-submit">Change password</button>
</div>
</form>
  </form>
</div>
</div>


</body>
</html>
