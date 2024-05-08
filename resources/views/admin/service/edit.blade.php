@extends('admin.layout.index')
@section('title', 'Edit - Service')
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý dịch vụ / Sửa dịch vụ</h3>
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
                            <label for="pwd">Mã loại dịch vụ:</label>
                            <input type="text" class="form-control" placeholder="Mã loại dịch vụ" name="ma_loai_dv"
                                value="{{ $service->ma_loai_dv }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Tên:</label>
                            <input type="text" class="form-control" placeholder="Tên" name="ten"
                                value="{{ $service->ten }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Giá tiền:</label><br>
                            <input type="text" class="form-control" placeholder="Giá tiền" name="gia_tien"
                                value="{{ $service->gia_tien }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Đơn vị:</label><br>
                            <input type="text" class="form-control" placeholder="Đơn vị" name="don_vi"
                                value="{{ $service->don_vi }}">
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="button" class="btn btn-info"><a style="color: #fff"
                                href="{{ route('admin.service.index') }}">Trở lại</a></button>
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
