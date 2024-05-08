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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý sân bóng</h3>
                    {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
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
                <div class="card" style="margin-left: 15px;">
                    <div class="table-responsive">
                        <a href="{{ route('admin.football_pitch.add') }}">
                            <button style="display: block ;" type="submit" class="btn btn-success">Thêm sân bóng</button>
                        </a>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr class="bg_tr">
                                        <th scope="col">Id</th>
                                        <th scope="col">Loại sân</th>
                                        <th scope="col">Tên sân</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footballPitchs as $key => $footballPitch)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>Sân 5</td>
                                            <td>{{ $footballPitch->ten }}</td>
                                            <td>{{ $footballPitch->mo_ta }}</td>
                                            <td>
                                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                    href="{{ route('admin.football_pitch.edit', ['id' => $footballPitch->id]) }}"
                                                    aria-expanded="false">
                                                    Sửa<i style="font-size: 25px; padding-right: 5px;"
                                                        class="mdi mdi-account-edit"></i>
                                                </a>
                                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                    style="color: red"
                                                    href="{{ route('admin.football_pitch.delete', ['id' => $footballPitch->id]) }}"
                                                    aria-expanded="false"
                                                    onclick="return confirm('Ban co muon xoa khong?')">
                                                    Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div style="float: right;">
                    </div>
                </div>
            </div>
            {{ $footballPitchs->links() }}
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
