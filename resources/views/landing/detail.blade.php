<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flower Garden</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('eStartup/assets/img/leaf.svg')}}" rel="icon">
  <link href="{{url('eStartup/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('eStartup/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('eStartup/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('eStartup/assets/vendor/modal-video/css/modal-video.min.css')}}" rel="stylesheet">
  <link href="{{url('eStartup/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('eStartup/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('eStartup/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v3.0.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <h1><a href="{{url('/')}}"><span>Arrvella</span>Garden</a></h1>
        <!-- Uncomment below if you prefer to se an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

          <li class="menu-active"><a href="{{url('/')}}">Back</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <section id="hero">
      <div class="hero-container" data-aos="fade-in"><div class="container">
            @if($barang['gambar'])
            <img src="{{ asset('storage/'.$barang['gambar']) }}" width="250px" height="350px" alt="">
            @else
                Nothing image
                @endif

                        <h1>{{$barang->nama_barang}}</h1>

                <h5><strong>Stok  : {{$barang->stok}}</strong> </h5>
                 <h5><strong>Price : ${{number_format($barang->harga_jual,0,',','.')}}</strong></h5>
                 <a href="https://wa.me/+6285885777190?text=apakah barang tersedia" class="btn btn-success btn-sm" style="font-size:20px;">Order via <i class="fa fa-whatsapp" style="font-size:28px;"></i></a>

                </div>
</div>
  </section><!-- End Hero Section -->
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
<!-- End Hero Section -->

  <!-- ======= Footer ======= -->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <div class="life-unstyled">
                    <i class="fa fa-map-marker" style="color: white;font-size: 20px;">kp. Tamansari,RT/RW 1/3 Tamansari Bogor<br>Bogor,Indonesia</i>
                    <br><br>
                  <i class="fa fa-envelope" style="color: white;font-size: 20px;"> agifagung51@gmail.com</i>
                <br><br>
                  <i class="fa fa-phone" style="color: white;font-size: 20px;"> +62 858-8577-7190</i>
                <br><br><br>
                <a href="#"><i class="fa fa-facebook" style="font-size: 48px;"></i></a>
                <a href="#"><i class="fa fa-twitter"  style="font-size: 48px;"></i></a>
                <a href="#"><i class="fa fa-instagram"  style="font-size: 48px;"></i></a>
                <a href="#"><i class="fa fa-whatsapp" style="font-size: 48px;"></i></a>
              </div>
          </div>
        </div>





      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>Copyrights By @anonyarras.&copy; Flower Garden 2021.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="#">A.T.I.T</a>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="#">A.T.I.T</a>
        </div>
      </div>
    </div>

  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('eStartup/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/modal-video/js/modal-video.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/superfish/superfish.min.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/hoverIntent/hoverIntent.js')}}"></script>
  <script src="{{url('eStartup/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('eStartup/assets/js/main.js')}}"></script>

</body>

</html>
