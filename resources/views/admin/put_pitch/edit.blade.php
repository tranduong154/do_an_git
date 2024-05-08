@extends('admin.layout.index')
@section('title', 'Edit-PutPitch')
@php
use App\Models\FootballPitch;
@endphp
@section('content')
    <style>
        .disabled__item {
            display: none;
        }

    </style>
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý đặt sân / Sửa thông tin đặt sân</h3>
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
                            <label for="email">Mã tài khoản:</label>
                            <input type="text" class="form-control" placeholder="Mã tài khoản" name="ma_tk"
                                value="{{ $putPitch->ma_tk }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Mã đặt sân:</label>
                            <input type="text" class="form-control" placeholder="Mã đặt sân" name="ma_dat_san"
                                value="{{ $putPitch->ma_dat_san }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Tên người đặt:</label>
                            <input type="text" class="form-control" placeholder="Tên người đặt" name="ten_nguoi_dat"
                                value="{{ $putPitch->ten_nguoi_dat }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">SDT người đặt:</label>
                            <input type="text" class="form-control" placeholder="SDT người đặt" name="sdt_nguoi_dat"
                                value="{{ $putPitch->sdt_nguoi_dat }}">
                        </div>
                        <div class="form-group">
                            <label for="ngay_dat">Ngày đặt:</label>
                            <input type="date" class="form-control" placeholder="Ngày đặt" name="ngay_dat"
                                value="{{ $putPitch->ngay_dat }}">
                        </div>
                        <div class="form-group">
                            <label for="dateRequest">Ngày sử dụng</label>
                            <input type="date" class="form-control" name="ngay_su_dung" id="dateRequest"
                                value="{{ $putPitch->ngay_su_dung }}">
                        </div>
                        <div class="form-group">
                            <label for="ngay_gio_huy">Ngày hủy sân</label>
                            <input type="date" class="form-control" name="ngay_gio_huy"
                                value="{{ $putPitch->ngay_gio_huy }}">
                        </div>
                        <div class="form-group">
                            <label for="footballPitch">Chọn sân</label>
                            <select class="form-control" id="footballPitch" name="ma_san">
                                <option value="default">----Chọn sân----</option>
                                @foreach ($listFootballPitch as $footballPitch)
                                    <option value="{{ $footballPitch->id }}"
                                        {{ $footballPitch->id == $putPitch->ma_san ? 'selected' : '' }}>
                                        {{ $footballPitch->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="khung_gio">Khung giờ</label>
                            <select class="form-control" id="khung_gio" name="khung_gio">
                                <option value="default">----Chọn khung giờ----</option>
                                @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                                    <option class="item_detail timeText_{{ $key }}" value="{{ $key }}"
                                        {{ $key == $putPitch->khung_gio ? 'selected' : '' }}>{{ $item }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Loại nước:</label> <br>
                            <select id="ma_loai_dv" name="ma_loai_dv" class="form-control">
                                {{-- <option value="default">---Chọn---</option> --}}
                                @foreach ($listService as $service)
                                    <option value="{{ $service->ma_loai_dv }}"
                                        {{ $service->ma_loai_dv == $putPitch->ma_loai_dv ? 'selected' : '' }}>
                                        {{ $service->ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Số lượng nước:</label>
                            <input style="width: 100px !important;" id="so_luong" type="number" name="so_luong_dv"
                                value="{{ $putPitch->so_luong_dv }}" class="water_qty" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Trạng thái:</label>
                            <select name="ma_trang_thai" id="">
                                @foreach ($statusPutPitchs as $statusPutPitch)
                                    <option value="{{ $statusPutPitch['id'] }}"
                                        {{                                         $statusPutPitch['id'] == $putPitch->ma_trang_thai ? 'selected' : '' }}>
                                        {{ $statusPutPitch['ten_trang_thai'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="button" class="btn btn-info"><a style="color: #fff"
                                href="{{ route('admin.putPitch.index') }}">Trở lại</a></button>
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
