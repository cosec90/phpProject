
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
  <nav class="navbar navbar-expand-sm bg-dark ">
  <div class="navbar-brand">
    Lorem
  </div>
  <div class="navbar-order">
<ul class="navbar-nav">
  <li class="nav-item welcome">
    Welcome  <?php echo $_GET['username'];?>
    </li>
    <li class="nav-item welcome">
      <form class="form" action="../Admin-modules/signout.php" method="post">
      <div class="button-container-li">
        <a class="link" href="../views/changePassword.php?x=<?php echo $_GET['username'];?>">Change password</button></a>
      </div>
    </form>
    </li>
</ul>
</div>
</nav>
</body>
</html>
