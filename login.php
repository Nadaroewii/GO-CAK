<?php include 'authControllogin.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>GO-CAK</title>
  <link rel="icon" type="image/x-icon" href="assets/hello.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="modal-dialog text-center">
<div class="col-sm-8 main-section">
<div class="modal-content">

<div class="col-12 user-img">
<img src="assets/hello.jpg">
</div>

<form class="col-12" action="login.php" method="post">
<?php if (count($errors) > 0): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <li>
      <?php echo $error; ?>
    </li>
    <?php endforeach;?>
  </div>
<?php endif;?>
<div class="form-group">
<input type="text" class="form-control" name="username" placeholder="Username or Email" required="required" >
</div>
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password" required="required">
</div>
<button type="submit" name="login-btn" class="btn"><i class="fas fa-sign-in-alt"></i>Login</button>
</form>
<div class="col-12 forgot">
<p>Dont Have Account?<a href="regist.php"> Sign Up!</a></p>
</div>
</div>
</div>
</body>
</html>