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
    <h2 class="header">Sign Up</h2>
<form  action="../Admin-modules/signup.php" method="POST">
  <div class="form-group">
    <label class="email">Name</label><br>
    <input type="text" class=" input" placeholder="Enter name" name="name" required>
  </div>
  <div class="form-group">
    <label class="pass">Email</label><br>
    <input type="email" class="input" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label class="email">Username</label><br>
    <input type="text" class=" input" placeholder="Enter username" name="username" required>
  </div>
  <div class="form-group">
    <label class="email">Password</label><br>
    <input type="password" class=" input" placeholder="Enter password" name="password" required>
  </div>
  <div class="button-container">
  <button type="submit" class="btn form-button-sign" name="login-submit">Submit</button>
  </div>
</form>
    </form>
  </div>
</div>

</body>
</html>
