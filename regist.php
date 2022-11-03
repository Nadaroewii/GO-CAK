<?php include 'authController.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTER GO-CAK</title>
  <link rel="icon" type="image/x-icon" href="assets/hello.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

<div class="modal-dialog text-center">
<div class="col-sm-12 main-section">
<div class="modal-content">

<div class="col-12 user-img">
<img src="assets/hello.jpg">
</div>
<div class="signup-form">
<form class="col-9" action="regist.php" method="post">
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
		<h2>Sign Up </h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required" >
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required" >
			</div>
        </div>
		 <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="number" class="form-control" name="phone" placeholder="Phone Number" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-key"></i>
				</span>
				<input type="password" class="form-control" name="passwordConf" placeholder="Confirm Password" required="required">
			</div>
        </div>

		<div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
</form>
<div class="col-12 forgot">
<p>Have Account?<a href="login.php"> Log In</a></p>
</div>
</div>
</div>
</body>
</html>