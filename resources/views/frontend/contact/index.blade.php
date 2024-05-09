@extends('frontend.layout.index')
@section('title','About')
@section('content')
<div>

    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Địa chỉ cụ thể</h1>
                            <span class="color-text-a"> Số 7 Duy Tân, Hải Châu, Đà Nẵng, phía trong Quân khu 5.</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Liên hệ
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Contact Single ======= -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-map box">
                            <div id="map" class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3515225956116!2d108.21391627417925!3d16.047238340028187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142190a6f88264b%3A0x432644d66848d79e!2zU8OibiBiw7NuZyDEkcOhIER1eSBUw6Ju!5e0!3m2!1svi!2s!4v1715185340074!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 section-t8">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name"
                                                    class="form-control form-control-lg form-control-a"
                                                    placeholder="Tên" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <input name="email" type="email"
                                                    class="form-control form-control-lg form-control-a"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" name="message" cols="45"
                                                    rows="8" placeholder="Nội dung" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 my-3">
                                            <div class="mb-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-a">Gửi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 section-md-t3">
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-envelope"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Thông tin liên hệ</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">Email.
                                                <span class="color-a">duytan@gmail.com</span>
                                            </p>
                                            <p class="mb-1">Phone.
                                                <span class="color-a">+84 905 333333</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box section-b2">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-geo-alt"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Địa chỉ</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <p class="mb-1">
                                                Số 7 Duy Tân, Hải Châu, Đà Nẵng, phía trong Quân khu 5.
                                                <br>Việt Nam
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-box-icon">
                                        <span class="bi bi-share"></span>
                                    </div>
                                    <div class="icon-box-content table-cell">
                                        <div class="icon-box-title">
                                            <h4 class="icon-title">Mạng xã hội</h4>
                                        </div>
                                        <div class="icon-box-content">
                                            <div class="socials-footer">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-instagram" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one">
                                                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Single-->

    </main><!-- End #main -->
</div>

@endsection