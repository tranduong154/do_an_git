<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png') }}">
    <title>@yield('title') - Quản lý sân bóng đá Duy Tân</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    .bg_tr {
        color: #ffffff;
        background: linear-gradient(to right, #0178bc 0%, #00bdda 100%);
    }
</style>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.layout.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.layout.left')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/flot-data.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('https://code.jquery.com/ui/1.13.0/jquery-ui.js') }}"></script>
    <script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js') }}"></script>
    <script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#footballPitch,#dateRequest').on('change keyup', function(e){
                var footballPitch = $('#footballPitch').val();
                var dateRequest = $('#dateRequest').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url: "{{ route('admin.putPitch.orderSearch') }}",
                    data: {footballPitch: footballPitch, dateRequest: dateRequest},
                    success:function(data){
                    putPitchDetails = data.data;
                    console.log(putPitchDetails);
                    $(`.item_detail`).removeClass("disabled__item");
                    $.map(putPitchDetails, function(putPitchDetail, index) {
                        val = $(`.timeText_${putPitchDetail.khung_gio}`).val();
                        if (putPitchDetail.khung_gio == val) {
                            $(`.timeText_${val}`).addClass("disabled__item");
                        } 
                    });
                    }
                });
            })
        });
    </script>
</body>

</html>
