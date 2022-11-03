<!DOCTYPE html>
<html lang="en">
    <?php
    include 'koneksi.php';
    session_start();
    $idd= $_SESSION['id'];
    ?>
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">History Order </a>
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
                <h1 class="masthead-heading2 text-uppercase">Lihat History Perjalanan anda menggunakan layanan GO-CAK</h1>
            </div>
        </header>
        <!-- Our Service Section-->
        <section class="page-section portfolio" id="OurService">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">History <?php echo $_SESSION['name']; ?> </h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="table-responsive-lg">
                        <table class="table table-bordered bg-primary">
                        <?php
  echo"<thead>
  <tr>
  <th >Asal</th>
  <th >Tujuan</th>
  <th >Jarak</th>
  <th >Alamat</th>
  <th >Harga</th>
</tr>";
echo"</thead>";
 $hasil = mysqli_query($conn,"SELECT stasiun.asal,stasiun.tujuan,stasiun.jarak,prosespesan.alamat,prosespesan.harga FROM prosespesan INNER JOIN stasiun ON id_stas=stasiun_id WHERE user_id= '$idd'");
        while($row=mysqli_fetch_array($hasil))
            {
                echo"<tbody>";
                echo "<tr>";
                echo "<td>" . $row['asal'] . "</td>";
                echo "<td>" . $row['tujuan'] . "</td>";
                echo "<td>" . $row['jarak'] . " Km </td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "</tr>";
                echo "</tbody>";
            }  
 ?>   
                        </table>
                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
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
