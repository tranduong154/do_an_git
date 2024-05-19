<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="{{ route('frontend.index') }}">SÂN BÓNG ĐÁ <span class="color-b">DUY TÂN</span></a>

    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link" href="{{ route('frontend.index') }}">Trang chủ</a>
        </li>

        <li class="nav-item">
          <a  style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link " href="{{ route('frontend.about') }}">Giới thiệu</a>
        </li>

        <li class="nav-item">
          <a  style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link " href="{{ route('frontend.order') }}">Đặt sân</a>
        </li>
      
        <li class="nav-item">
          <a  style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link " href="{{ route('frontend.contact') }}">Liên hệ</a>
        </li>

        <li class="nav-item">
          @if(!auth()->check())
          <a style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link " href="{{ route('frontend.account.login') }}">Đăng nhập</a>
          @else
          <a  style="font-family:'Times New Roman', Times, serif ; font-size:22px" class="nav-link " href="{{ route('frontend.account.logout') }}">Đăng xuất</a>
          @endif
        </li>

      </ul>
    </div>
    <div>
      @if(auth()->check())
      <span>Xin chào: </span> <a  style="margin-top: -15px; text-align:center ;font-family:'Times New Roman', Times, serif ; font-size:16px" class="nav-link " href="">{{ Auth::User()->ten }}</a>
      @endif
    </div>

  </div>
</nav>