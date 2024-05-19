@extends('frontend.layout.index')
@section('title', 'Register')
@section('content')
    <div>

        <main id="main">
            <section class="intro-single" style="margin-top: -50px">
                <div class="container">
                    <div class="row">
                        <div class="limiter">
                            <div class="container-login100">
                                <div class="wrap-login100">
                                    <form class="login100-form validate-form" action="" method="POST">
                                        @csrf
                                        <span class="login100-form-title p-b-43">
                                            Đăng ký
                                        </span>
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
                                        
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" type="text" name="name">
                                            <span class="focus-input100"></span>
                                            <span class="label-input100">Họ và tên</span>
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" type="text" name="email">
                                            <span class="focus-input100"></span>
                                            <span class="label-input100">Email</span>
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" type="text" name="phone">
                                            <span class="focus-input100"></span>
                                            <span class="label-input100">Số điện thoại</span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                                            <input class="input100" type="password" name="password">
                                            <span class="focus-input100"></span>
                                            <span class="label-input100">Mật khẩu</span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                                            <input class="input100" type="password" name="pass_confirm">
                                            <span class="focus-input100"></span>
                                            <span class="label-input100">Nhập lại mật khẩu</span>
                                        </div>
                                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                                            <div class="contact100-form-checkbox">
                                                <label>
                                                    <a href="{{ route('frontend.account.login') }}">Đăng nhập</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button class="login100-form-btn">
                                                Đăng ký
                                            </button>
                                        </div>
                                        <div class="text-center p-t-46 p-b-20">
                                            <span class="txt2">
                                                Hoặc đăng ký bằng
                                            </span>
                                        </div>
                                        <div class="login100-form-social flex-c-m">
                                            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </form>
                                    <div class="login100-more"
                                        style="background-image: url('{{ asset('frontend/assets/img/san_cup.jpg') }} ') ;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main><!-- End #main -->
    </div>

@endsection
