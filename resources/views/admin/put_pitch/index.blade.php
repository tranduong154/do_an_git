@extends('admin.layout.index')
@section('title', 'Put pitch')
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Quản lý đặt sân</h3>
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
            <div class="search" style="margin-bottom: 10px;">
                <input style="padding-left: 5px;" id="search" type="text" class="searchTerm"
                    placeholder="Tìm kiếm tên người đặt">
                <i style="margin: 13px 0 0 -25px;" class="fa fa-search"></i>
                <select style="margin-left: 10px; padding: 5px; width:200px; color:currentcolor;border: 1px solid;background: white;"
                    class="searchTerm" name="" id="searchTrangThai">
                    <option value="">Tìm kiếm trạng thái sân</option>
                    <option value="da_dat">Đã đặt</option>
                    <option value="da_huy">Đã hủy</option>
                </select>
                {{-- <i style="margin: 13px 0 0 -25px;" class="fa fa-search"></i> --}}
            </div>
            <!-- Row -->
            <div class="row">
                {{-- <div class="card" style="margin-left: 15px;">
                <div class="table-responsive">
                    <a href="{{ route('admin.putPitch.add') }}">
                        <button style="display: block ;" type="submit" class="btn btn-success">Thêm thông tin đặt
                            sân</button>
                    </a>
                </div>
            </div> --}}
                <!-- Column -->
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <div id="tablePutPitch">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        function fetch_data(page) {
            let val_search = $('#search').val();
            $.ajax({
                url: `putPitch/search?search=${val_search}&page=${page}`,
                success: function(data) {
                    $('#tablePutPitch').html(data.html);
                }
            });


        }

        function fetch_data_1(page) {

            let val_search_trang_thai = $('#searchTrangThai').val();
            $.ajax({
                url: `putPitch/search?search=${val_search_trang_thai}&page=${page}`,
                success: function(data) {
                    $('#tablePutPitch').html(data.html);
                }
            });

        }
        $('#search').on('keyup', function() {
            let val_search = $(this).val();
            fetch_data(val_search);
        });

        $('#searchTrangThai').on('click', function() {
            let val_search_trang_thai = $(this).val();
            fetch_data_1(val_search_trang_thai);
        });

        $(document).ready(function() {
            fetch_data();
            fetch_data_1();
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
        });
    </script>
@endsection
