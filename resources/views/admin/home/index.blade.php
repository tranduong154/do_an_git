@extends('admin.layout.index')
@section('title','Home')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Trang chủ</h3>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol> --}}
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h2 class="card-title">SÂN BÓNG ĐÁ DUY TÂN - ĐÀ NẴNG</h2> <br>
                        <div class="flot-chart">
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3515225956116!2d108.21391627417925!3d16.047238340028187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142190a6f88264b%3A0x432644d66848d79e!2zU8OibiBiw7NuZyDEkcOhIER1eSBUw6Ju!5e0!3m2!1svi!2s!4v1715185340074!5m2!1svi!2s"width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>
</div>
  
  @endsection