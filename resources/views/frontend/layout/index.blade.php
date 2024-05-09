<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - SÂN BÓNG ĐÁ DUY TÂN - ĐÀ NẴNG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css') }}">

  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
  @stack('after-css');
  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div id="app">
  <!-- ======= Property Search Section ======= -->
  <!-- ======= Header/Navbar ======= -->
  @include('frontend.layout.header')
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  {{-- @include('includes.partials.message') --}}

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('frontend.layout.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</div>
<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <!--===============================================================================================-->
	<script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/vendor/animsition/js/animsition.min.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/vendor/select2/select2.min.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/vendor/countdowntime/countdowntime.js') }}"></script>
  <!--===============================================================================================-->
    <script src="{{ asset('login/js/main.js') }}"></script>
  <script src="assets/js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
{{-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> --}}
{{-- <script>
  var usd = $("#vn_to_usd").val();
  paypal.Button.render({
    // Configure environments
    env: 'sandbox',
    client: {
      sandbox: 'AbmrKN0NrQLK0onox9m4xQUJ-XVU2OtPFBK3TAwHArHZFQq26dI_UpkmssfQDY90q1ioBdOKa5M_IuTC',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: `${usd}`,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.location.href = "{{URL::to('frontend/checkout/history')}}"
      });
    }
  }, '#paypal-button');

</script> --}}
@stack('after-scripts')
</body>

</html>