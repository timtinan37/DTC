<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DTC</title>
  <meta content="Official Website For Dhaka Tax Consultants" name="descriptison">
  <meta name="author" content="Tahsin Abrar, Tariq Imtinan">

  <!-- meta tags for facebook -->
  <meta property="og:title" content="Dhaka Tax Consultants">
  <meta property="og:description" content="Tax, VAT & Total Business Solution">
  <meta property="og:image" content="{{ asset('img/Logo 01.jpg') }}">
  <meta property="og:url" content="http://dhakatax.com">
  <meta property="og:type" content="website" />

  <!-- meta tags for twitter -->
  <meta name="twitter:title" content="Dhaka Tax Consultants">
  <meta name="twitter:description" content="Tax, VAT & Total Business Solution">
  <meta name="twitter:image" content="{{ asset('img/Logo 01.jpg') }}">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('img/favicons/site.webmanifest') }}"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Jquery -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

</head>

<body>

  <!-- ======= Header ======= -->
    @include('header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h2>Tax, VAT & Total Business Solution</h2>
      <!-- <a href="#services" class="btn-get-started scrollto"><i class="bx bxs-chevrons-down"></i></a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
      @include('about')
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
      @include('services')
    <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
      @include('team')
    <!-- End Team Section-->

    <!-- ======= Contact Section ======= -->
      @include('contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>