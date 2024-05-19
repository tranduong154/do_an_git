@extends('frontend.layout.index')
@section('title','Home')
@section('content')
<main id="main">
<div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/san1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">2024</span> Giải
                      <br> GIAO LƯU
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/san_cup.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">2024</span> GIẢI
                      <br> CÚP ĐÀ NẴNG
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/san7.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      <span class="color-b">2024 </span> GIẢI 
                      <br> GIAO LƯU CÔNG TY
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        {{-- <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">CÁC LOẠI DỊCH VỤ</h2>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-md-4" >
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-pip"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">SÂN</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c" style="font-size: 19px ;font-family:'Times New Roman', Times, serif">
                Ở đây chúng tôi có 6 sân 5 và 2 sân 7 hoạt động tất cả các ngày trong tuần
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-bootstrap"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">BÓNG</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c"style="font-size: 19px ;font-family:'Times New Roman', Times, serif"">
                  Các loại bóng gồm có loại số 4 và số 5 phù hợp vói từng loại sân để các cầu thủ có cảm giác bóng tốt hơn.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cup-straw"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">NƯỚC</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c" style="font-size: 19px ;font-family:'Times New Roman', Times, serif"">
                  Ở đây có nhiều loại nước uống giúp cho các cầu thủ có thể lựa chọn theo sở thích của mình.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Hình ảnh sân</h2>
              </div>
              <div class="title-link">
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/san5.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Sân 5A</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Chiều dài sân</h4>
                          <span>25m
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chiều rộng</h4>
                          <span>15m</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/san5_1.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Sân 5B</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Chiều dài sân</h4>
                          <span>25m
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chiều rộng</h4>
                          <span>15m</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/san5_2.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Sân 5C</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Chiều dài sân</h4>
                          <span>25m
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chiều rộng</h4>
                          <span>15m</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/san5_3.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Sân 5D</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Chiều dài sân</h4>
                          <span>25m
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chiều rộng</h4>
                          <span>15m</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Các giải đấu tại sân Duy Tân</h2>
              </div>
              <div class="title-link">
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/giai_dau_4.jfif" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Duy Tân</a>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2014</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/giai_dau_1.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Duy Tân</a>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/giai_dau_2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Duy Tân</a>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/giai_dau_3.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Duy Tân</a>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">CÚP</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/cup_1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text" style=" font-style: italic; font-family: Comic Sans MS; font-size: 19px">
                        Giải đấu tranh cúp Đa Phước lần thứ 1 năm 2024 tại sân bóng đá Duy Tân - Đà Nẵng.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">9/2024</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/cup_2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text" style=" font-style: italic; font-family: Comic Sans MS; font-size: 19px">
                        Giải đấu tranh cúp Duy Tân lần thứ 2 năm 2021 tại sân bóng đá Duy Tân - Đà Nẵng.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">9/2024</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
  @endsection