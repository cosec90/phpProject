
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
</head>
<body>
  <h3>Change password for  <?php echo $_GET['user'];?></h1>
  <div class="container-fluid">
  <div class="form-container">
<form action="../Admin-modules/forgot_pass.php?username=<?php echo $_GET['user'] ?>" method="post">
  <div class="form-group">
    <label class="pass">New password</label><br>
    <input type="text" class=" input" placeholder="Enter password" name="new_pass" required>
  </div>
  <div class="form-group">
    <label class="pass"> Confirm password</label><br>
    <input type="password" class=" input" placeholder="Confirm password" name="confirm_pass" required>
  </div>
  <div class="button-container">
  <button type="submit" class="btn form-button-sign" name="confirm">Confirm</button>
  </div>
</form>
    </form>
  </div>
</div>


</body>
</html>
