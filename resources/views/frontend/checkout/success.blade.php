@extends('frontend.layout.index')
@section('title','Success')
@section('content')
<div>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Chi tiết đặt sân</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Chi tiết đặt sân
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="alert alert-dismissible" style="background: #2eca6a; color: white; text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i>Thông báo!</h4>
                <h1>Bạn đã đặt sân thành công!!</h1>
                <h4>Vui lòng đến nhận sân trước 15 phút!</h4>
                <h4>Cảm ơn!</h4>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>

</div>
@endsection