<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="assets/hello.jpg" />
    <?php
    Session_start();
    ?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GO-CAK</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
       
        <link type="text/css" href="css/styless.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">GO-CAK ACCOUNT </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="home1.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="akunku1.php">Akun <?php echo $_SESSION['username']; ?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="histry.php">History</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-white text-center">
        <div class="modal-dialog text-center">
<div class="col-sm-14 main-section">
<div class="modal-content">
<div class="container bootstrap snippets">
<div class="row">
<div class="col-12 mb-4 user-img">
<img src="assets/images.png" >
</div>
<div class="user-form py-3 col-lg-10 mb-4 mb-lg-0 ">
<form class="col-11" action="" method="post">
<div class="form-group">
<h1 class="masthead-heading1 text-uppercase">Admin Account</h1>
        <hr>
			<div class="input-group">
				<span class="input-group-addon"></span>
				<p type="text" class="form-control" name="name"  value="nama usernya"><i class="fas fa-user"></i>
                <?php echo $_SESSION['name'];?> </p>
            </div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"></span>
				<p type="text" class="form-control" name="username" value="username nya" ><i class="fas fa-user"></i>
                <?php echo $_SESSION['username'];?> </p>
            </div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"></span>
				<p type="email" class="form-control" name="email" value="email usernya" >
                    <?php echo $_SESSION['email'];?> </p>
			</div>
        </div>
		 <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"></span>
				<p type="text" class="form-control" name="phone" value="phone usernya"><i class="fas fa-phone"></i>
                <?php echo $_SESSION['phone'];?> </p>
            </div>
        </div>
		<div class="form-group">
        <a href="akunk1.php" type="button" name="signup-btn" class="btn btn-primary btn-lg text-white">Edit Profil</a>
        </div>
</hr>
</form>
</div>
</div>
</div>
</div>
</div>
        </header>
         <!-- Footer-->
         <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-2">Location GO-CAK</h4>
                        <p class="lead mb-2">Surabaya</p>
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram" ></i></a>
                    </div>
                </div>
            </div>
        </footer>
         <!-- Copyright Section-->
         <div class="copyright py-4 text-center text-black">
            <div class="container"><small>Copyright © GO-CAK Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>