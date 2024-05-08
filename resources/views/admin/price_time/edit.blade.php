@extends('admin.layout.index')
@section('title', 'Edit - Regulation')
@section('content')
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý giá theo khung giờ / Sửa giá theo khung giờ</h3>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>Thong bao!</h4>
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4>Chú ý!</h4>
                    <ul style="margin-left: -30px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-12">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pwd">Loại sân:</label>
                            <input type="text" class="form-control" placeholder="Loại sân" name="san" value="Sân 5">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Khung giờ:</label>
                            <input type="text" class="form-control" placeholder="Khung giờ" name="khung_gio"
                                value="{{ $priceTime->khung_gio }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Giá tiền: </label>
                            <input type="number" class="form-control" placeholder="Giá tiền" name="gia_tien"
                                value="{{ $priceTime->gia_tien }}">
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="button" class="btn btn-info"><a style="color: #fff"
                                href="{{ route('admin.football_pitch.priceTime') }}">Trở lại</a></button>
                    </form>
                    <div style="float: right;">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
