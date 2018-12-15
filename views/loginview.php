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
  <div class="container-fluid">
      <div class="form-container">
        <h2 class="header">Login</h2>
    <form action="../Admin-modules/login.php" method="POST">
      <div>
        <label class="username">Username</label><br>
        <input type="text" class=" input" placeholder="Enter username" name="username">
      </div>
      <div >
        <label class="pass">Password</label><br>
        <input type="password" class="input" placeholder="Enter password" name="password">
      </div>
      <div class="button-container">
      <button type="submit" class="btn form-button" name="login-submit">Login</button>
      <button type="submit" class="btn form-button" name="forgot-submit">Forgot Password</button>
      </div>

    </form>
    <form action="../Admin-modules/login.php" method="POST">
      <div class="button-container">
      <a href="index.php"><button type="submit" class="btn form-button-sign" name="sign-up">Sign up</button></a>
      </div>
    </form>

        </form>
      </div>
    </div>
</body>
</html>
