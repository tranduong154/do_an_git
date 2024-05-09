@extends('admin.layout.index')
@section('title', 'Profile')
@section('content')
    <style>
        input[type=file] {
            width: 90px;
            color: transparent;
        }

    </style>
    <script>
        window.pressed = function() {
            var a = document.getElementById('nhan');
            if (a.value == "") {
                fileLabel.innerHTML = "Choose file";
            } else {
                var theSplit = a.value.split('\\');
                fileLabel.innerHTML = theSplit[theSplit.length - 1];
            }
        };
    </script>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Trang thông tin cá nhân</h3>
                    {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol> --}}
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body" style="background: antiquewhite;">
                            <center class="m-t-30">
                                <h4 class="card-title m-t-10">{{ Auth::user()->ten }}</h4>
                                <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>
                                <div class="row text-center justify-content-md-center">
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                class="icon-people"></i>
                                            <font class="font-medium">254</font>
                                        </a></div>
                                    <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                class="icon-picture"></i>
                                            <font class="font-medium">54</font>
                                        </a></div>
                                </div>
                            </center>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="card-body"> <small class="text-muted">Địa chỉ </small>
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3515225956116!2d108.21391627417925!3d16.047238340028187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142190a6f88264b%3A0x432644d66848d79e!2zU8OibiBiw7NuZyDEkcOhIER1eSBUw6Ju!5e0!3m2!1svi!2s!4v1715185340074!5m2!1svi!2s"  width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <br>
                            </div>
                            <div style="text-align:center; margin:15px 0 15px 0">
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="mdi mdi-youtube-play"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" class="form-horizontal form-material"
                                enctype="multipart/form-data" style="margin: 15px 0 0 10px">
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">x</button>
                                        <h4><i class="icon fa fa-check"></i>Thong bao!</h4>
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">x</button>
                                        <h4>Chú ý!</h4>
                                        <ul style="margin-left: -30px;">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="col-md-12">Tên</label>
                                    <div class="col-md-12">
                                        <input type="text" name="ten" placeholder="" class="form-control form-control-line"
                                            value="{{ Auth::User()->ten }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder=""
                                            class="form-control form-control-line" name="example-email" id="example-email"
                                            value="{{ Auth::User()->email }}">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password" value="{{ Auth::User()->password }}"
                                            class="form-control form-control-line">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label class="col-md-12">Số điện thoại</label>
                                    <div class="col-md-12">
                                        <input type="text" name="sdt" placeholder="Số điện thoại"
                                            value="{{ Auth::User()->sdt }}" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Địa chỉ</label>
                                    <div class="col-md-12">
                                        <input type="text" name="dia_chi" placeholder="Địa chỉ"
                                            value="{{ Auth::User()->dia_chi }}" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ngày làm việc</label>
                                    <div class="col-md-12">
                                        <input type="date" name="ngay_lam_viec" placeholder=""
                                            value="{{ Auth::User()->ngay_lam_viec }}"
                                            class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Quốc tịch</label>
                                    <div class="col-md-12">
                                        <input type="text" name="quoc_tich" placeholder="Quốc tịch"
                                            value="{{ Auth::User()->quoc_tich }}" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Cập nhật</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
