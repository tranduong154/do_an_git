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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý giá theo khung giờ</h3>
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
                <div class="card" style="margin-left: 15px">
                    <div class="table-responsive">
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
                                        <th scope="col">Khung giờ</th>
                                        <th scope="col">Giá tiền</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($priceTimes as $key => $priceTime)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>Sân 5</td>
                                            <td>{{ $priceTime->khung_gio }}</td>
                                            <td>{{ number_format($priceTime->gia_tien) }} VND</td>
                                            <td>
                                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                                    href="{{ route('admin.football_pitch.editPriceTime', ['id' => $priceTime->id]) }}"
                                                    aria-expanded="false">
                                                    Sửa<i style="font-size: 25px; padding-right: 5px;"
                                                        class="mdi mdi-account-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination justify-content-center">
                {{ $priceTimes->links() }}
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
