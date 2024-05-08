@extends('admin.layout.index')
@section('title', 'Customer')
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý nhân viên / Sửa nhân viên</h3>
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
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-12">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Tên khách hàng:</label>
                            <input type="text" class="form-control" placeholder="Tên khách hàng" name="ten"
                                value="{{ $personnel->ten }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Ngày sinh:</label>
                            <input type="date" class="form-control" placeholder="Ngày sinh" name="ngay_sinh"
                                value="{{ $personnel->ngay_sinh }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Địa chỉ:</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="dia_chi"
                                value="{{ $personnel->dia_chi }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Số điện thoại:</label>
                            <input type="text" class="form-control" placeholder="Số điện thoại" name="sdt"
                                value="{{ $personnel->sdt }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Giới tính:</label>
                            <input type="text" class="form-control" placeholder="Giới tính" name="gioi_tinh"
                                value="{{ $personnel->gioi_tinh }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Quốc tịch:</label>
                            <input type="text" class="form-control" placeholder="Quốc tịch" name="quoc_tich"
                                value="{{ $personnel->quoc_tich }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Ngày làm việc:</label>
                            <input type="date" class="form-control" placeholder="Ngày làm việc" name="ngay_lam_viec"
                                value="{{ $personnel->ngay_lam_viec }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Quyền:</label>
                            <select name="ma_quyen" id="">
                                @foreach ($permissions as $key => $permission)
                                    <option value="{{ $permission->ma_quyen }}"
                                        {{ $permission->ma_quyen == $personnel->ma_quyen ? 'selected' : '' }}>
                                        {{ $permission->ten }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="button" class="btn btn-info"><a style="color: #fff"
                                href="{{ route('admin.personnel.index') }}">Trở lại</a></button>
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
