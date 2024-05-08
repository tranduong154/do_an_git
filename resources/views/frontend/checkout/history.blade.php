@extends('frontend.layout.index')
@section('title', 'History')
@section('content')
    <div>
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">Lịch sử đặt sân</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Lịch sử đặt sân
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <main id="main">
            <section id="cart_items">
                <div class="container">
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
                    <div class="search" style="margin-bottom: 15px;">
                        <select style="padding: 5px; width:200px; color:black;border: 1px solid;background: white;"
                            class="searchTerm" name="" id="search">
                            <option value="">Tìm kiếm trạng thái sân</option>
                            <option value="da_dat">Đã đặt</option>
                            <option value="da_huy">Đã hủy</option>
                        </select>
                        {{-- <i style="margin: 13px 0 0 -25px;" class="fa fa-search"></i> --}}
                        </button>
                    </div>
                    <div class="table-responsive cart_info">
                        <div id="tableHistory">

                        </div>
                    </div>
                </div>
            </section>
            <!--/#cart_items-->
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        function fetch_data(page) {
            let val_search = $('#search').val();
            $.ajax({
                url: `/frontend/checkout/search?search=${val_search}&page=${page}`,
                success: function(data) {
                    $('#tableHistory').html(data.html);
                }
            });
        }
        $('#search').on('click', function() {
            let val_search = $(this).val();
            console.log(val_search);
            fetch_data(val_search);
        });

        $(document).ready(function() {
            fetch_data();
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
        });
    </script>
@endsection
