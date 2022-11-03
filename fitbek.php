<?php include 'fitbek2.php'; ?>
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
<div class="col-sm-14 main-section">
<div class="modal-content">

<div class="col-12 user-img">
<img src="assets/hello.jpg">
</div>
<div class="signup-form">
<form class="col-11" action="fitbek.php" method="post">
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
        <h2>Layanan Kepuasan </h2>
        <p> Terimakasih <?php echo $_SESSION['username']; ?> sudah memesan <br>
        Bagaiamana Perjalanan kali ini? </p>
		<hr>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
        <span class="input-group-addon"><i class="fa fa-star"></i></span>
       <select name="nilai" class="form-control">   
       <option value="Buruk">Buruk</option>
                    <option value="Cukup">Cukup Baik</option>
                <option value="Baik">Baik</option>
                 <option value="Sangat Baik">Sangat Baik</option>
                </select>     
            </div>
        </div>                                                    
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				<input type="text" class="form-control" name="pesan" placeholder="Message" required="required" >
			</div>
        </div>
		<div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-primary btn-lg">Kirim</button>
        </div>
</form>
</div>
</div>
</body>
</html>
