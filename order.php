<?php include 'proses.php' ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GO-CAK</title>

       
        <link rel="icon" type="image/x-icon" href="assets/hello.jpg" />
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Order GO-CAK </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="home.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="akunku.php">Akun <?php echo $_SESSION['username']; ?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="history.php">History</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead text-white text-center">
                <h1 class="masthead-heading2 text-uppercase">Pilih Lokasi Stasiun Tempat <?php echo $_SESSION['name']; ?> Berada</h1>
            </div>
        </header>
        <!-- Our Service Section-->
        <section class="page-section portfolio" id="OurService">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nama Stasiun</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-6 mb-2">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/gubeng.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-6 mb-2">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/turi.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-2">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/wonokromo.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>     
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
        <!-- Portfolio Modals--><!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-2-mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 user-img">
                                            <img src="assets/gubeng.png" >
                                        </div>
                                        <div class="user-form1 py-5 col-lg-11 mb-0 mb-lg-0 ">
                                            <form class="col-9" action="proses.php" method="POST">
                                                <div class="form-group">
                                                    <h1 class="masthead-heading1 text-uppercase">Stasiun Gubeng</h1>
                                                     <hr>
                                                     <div class="input-group">
                                                         <span class="input-group-addon"></span>
                                                         <label>Detail <br> Tujuan: &nbsp &nbsp </label>
                                                     <select name="kolom1" class="form-control">
                                                         <?php
                                                         include 'koneksi.php';
                                                         $data=mysqli_query($conn,"SELECT * FROM stasiun WHERE asal = 'Gubeng'");
                                                         while($hasil=mysqli_fetch_assoc($data))
                                                         {
                                                             echo" <option value='$hasil[id_stas]'> $hasil[asal]  -  $hasil[tujuan] </option>";
                                                            }
                                                            ?>
                                                            </select>
                                                </div>
                                                        </div>
	
        <div class="form-group">
			<div class="input-group">
                <span class="input-group-addon"></span>
                <label>Detail <br> Alamat: &nbsp &nbsp </label>
				<input type="text" class="form-control" name="alamat" value="Keterangan alamat" > 
                    
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
        <span class="input-group-addon"></span>
       <label>Bayar <br> Via: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
       <select name="bayar" class="form-control">   
       <option value="Go-pay">Go-pay</option>
                    <option value="Tunai">Tunai</option>
                </select>     
            </div>
        </div> 
		<div class="form-group">
        <button type="submit" name="signup-btn" class="btn btn-primary btn-lg">Pesan <br> Sekarang </button>
        </div>
    </hr>
</form>
</div>
</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-2-mb-3">
                                    <div class="row">
<div class="col-lg-12 user-img">
<img src="assets/turi.png" >
</div>
<div class="user-form1 py-5 col-lg-11 mb-0 mb-lg-0 ">
<form class="col-9" action="proses.php" method="POST">
<div class="form-group">
<h1 class="masthead-heading1 text-uppercase">Stasiun Pasar Turi</h1>
        <hr>
			<div class="input-group">
                <span class="input-group-addon"></span>
                <label>Dari <br> Stasiun: &nbsp &nbsp </label>
				<select name="kolom1" class="form-control">
             <?php
             include 'koneksi.php';
            $data=mysqli_query($conn,"SELECT * FROM stasiun WHERE asal = 'Pasar Turi'");
            while($hasil=mysqli_fetch_assoc($data))
            {
            echo" <option value='$hasil[id_stas]'> $hasil[asal]  -  $hasil[tujuan] </option>";
            }
            ?>
             </select>
            </div>
        </div>
        <div class="form-group">
			<div class="input-group">
                <span class="input-group-addon"></span>
                <label>Detail <br> Alamat: &nbsp &nbsp </label>
				<input type="text" class="form-control" name="alamat" value="Keterangan alamat" > 
                    
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
        <span class="input-group-addon"></span>
       <label>Bayar <br> Via: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
       <select name="bayar" class="form-control">   
       <option value="Go-pay">Go-pay</option>
                    <option value="Tunai">Tunai</option>
                </select>     
            </div>
        </div> 
		<div class="form-group">
        <button type="submit" name="signup-btn" class="btn btn-primary btn-lg">Pesan <br> Sekarang </button>
        </div>
    </hr>
</form>
</div>
</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-8-mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 user-img">
                                            <img src="assets/wonokromo.png" >
                                        </div>
                                        <div class="user-form1 py-5 col-lg-11 mb-0 mb-lg-0 ">
                                            <form class="col-9" action="proses.php" method="POST">
                                                <div class="form-group">
                                                    <h1 class="masthead-heading1 text-uppercase">Stasiun Wonokromo</h1>
                                                    <hr>
			<div class="input-group">
                <span class="input-group-addon"></span>
                <label>Dari <br> Stasiun: &nbsp &nbsp </label>
				<select name="kolom1" class="form-control">
             <?php
             include 'koneksi.php';
            $data=mysqli_query($conn,"SELECT * FROM stasiun WHERE asal = 'Wonokromo'");
            while($hasil=mysqli_fetch_assoc($data))
            {
            echo" <option value='$hasil[id_stas]'> $hasil[asal]  -  $hasil[tujuan] </option>";
            }
            ?>
             </select>
            </div>
        </div>
        <div class="form-group">
			<div class="input-group">
                <span class="input-group-addon"></span>
                <label>Detail <br> Alamat: &nbsp &nbsp </label>
				<input type="text" class="form-control" name="alamat" value="Keterangan alamat" > 
                    
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
        <span class="input-group-addon"></span>
       <label>Bayar <br> Via: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
       <select name="bayar" class="form-control">   
       <option value="Go-pay">Go-pay</option>
                    <option value="Tunai">Tunai</option>
                </select>     
            </div>
        </div> 
		<div class="form-group">
        <button type="submit" name="signup-btn" class="btn btn-primary btn-lg">Pesan <br> Sekarang </button>
        </div>
    </hr>
</form>
</div>
</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
