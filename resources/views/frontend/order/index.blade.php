@extends('frontend.layout.index')
@section('title', 'Order')
@php
use App\Models\FootballPitch;
@endphp
@section('content')
@section('after-css')
    <style>
        ul#tabs {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        ul#tabs li {
            display: inline-block;
            background-color: #252525;
            border-bottom: solid 2px grey;
            padding: 10px 20px;
            margin-bottom: 4px;
            color: #fff;
            cursor: pointer;
        }

        ul#tabs li:hover {
            background-color: grey;
        }

        ul#tabs li.active {
            background-color: #2eca6a;
        }

        ul#tab {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #content-tab div {
            display: none;
        }

        #content-tab div.active {
            display: block;
        }

        #content-tab>div {
            text-align: center;
            background-color: #2eca6a;
            /* width: 650px; */
            margin: 0 auto;
            padding: 0 3px;
            color: #fff;
        }

        .disabled__item {
            display: none;

        }

    </style>
@endsection
<!-- ======= Intro Single ======= -->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Đặt sân</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Đặt sân
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div>
            <a href="{{ route('frontend.checkout.index') }}" style="float: right; font-size: 18px;color: #2eca6a;">Xem
                chi tiết đặt sân tại đây</a>
        </div>
    </div>
</section><!-- End Intro Single-->
{{-- Vue components --}}
<div class="container orders">
    <form action="{{ route('frontend.order.post') }}" method="post" id="formOrderFootballPitch">
        @csrf
        <div class="orders__option">
            <div class="row">
                {{-- <div class="col-md-3">
                </div> --}}
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="footballPitch">Loại sân</label>
                        <select class="form-control" id="footballPitch" name="ma_loai_san">
                            <option value="default">----Chọn loại sân----</option>
                            @foreach ($listFootballPitch as $footballPitch)
                                <option value="{{ $footballPitch->id }}">{{ $footballPitch->ten }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="dateRequest">Ngày giờ</label>
                        <input type="date" min='{{ now()->toDateString('Y-m-d') }}' max='' class="form-control"
                            name="ngay_su_dung" id="dateRequest" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    {{-- <div class="form-group" style="line-height: 6.5;">
                        <button type="button" id="showSchedule" class="btn btn-primary">Xem</button>
                    </div> --}}
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="line-height: 6.5; float:right">
                        <button type="submit" id="btn_order" class="btn btn-primary">Đặt sân</button>
                    </div>
                </div>
                {{-- <div class="float-right">
                    <button class="btn btn-primary" type="submit" id="btn_order" data-toggle="modal">Đặt sân</button>
                </div> --}}
            </div>
        </div>
        <div id="content-tab" style="margin-bottom: 100px;">
            <div class="active">
                <table class="table table-dark">
                    <tbody>
                        @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                            @if (($loop->iteration - 1) % 5 == 0)
                                <tr>
                            @endif
                            <td class="text-center item_detail a_{{ $key }}" data-time="{{ $key }}">
                                <input type="hidden" name="key" value="{{ $key }}">
                                <input type="hidden" name="timeText" class="timeText_{{ $key }}"
                                    value="{{ $key }}">
                                <h4>{{ $item }}</h4>
                                <input type="hidden" name="chi_tiet[{{ $key }}][khung_gio]" id="khung_gio"
                                    value="{{ $key }}" class="qty-item" disabled>
                                <span class="status_{{ $key }} status">Còn chỗ</span><br>
                                <div class=" row water mb-2" style="margin-top: 15px;">
                                    <div class="col-md-3" style="margin-top: -11px;">
                                        <span>Loại nước:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="loai_nuoc" name="chi_tiet[{{ $key }}][water_name]"
                                            class="qty-item text-center water_name" disabled>
                                            {{-- <option value="default">---Chọn---</option> --}}
                                            @foreach ($listService as $service)
                                                <option value="{{ $service->ma_loai_dv }}">{{ $service->ten }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class=" row water mb-2">
                                    <div class="col-md-3">
                                        <span>Số lượng:</span>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 9px;">
                                        <input id="so_luong" type="number"
                                            name="chi_tiet[{{ $key }}][water_qty]"
                                            class="qty-item text-center water_qty" disabled required>
                                    </div>
                                </div>
                            </td>
                            @if ($loop->iteration % 5 == 0)
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
@push('after-scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script>
    $(document).ready(function() {

        // var d = new Date();
        // var time = d.getHours() + ":" + d.getMinutes();
        // let valKey = $("input[name*='key']").val();
        // var hourTime = time.split(':')[0];
        // if(hourTime == 15) {
        //     $(`.a_${valKey}`).addClass("disabled__item");
        // }


        $('.item_detail').click(function() {
            if (!$(this).hasClass('disabled__item')) {
                if (!$(this).hasClass("active__item")) {
                    $(this).find('.qty-item').attr('disabled', false);
                    console.log($(this).find('.qty-item'));
                    $(this).addClass("active__item");
                } else {
                    $(this).removeClass("active__item");
                    $(this).find('.qty-item').attr('disabled', true);
                }
            }
        });

        $('.water_name, .water_qty, .ball_qty').on('click change keyup', function(e) {
            e.stopPropagation();
        });

        async function getScheduleOrder(date) {
            let url = "{{ route('api.frontend.get-schedule') }}";
            let response = await axios.get(url, {
                params: {
                    'date': date
                }
            });
            if (response) {
                console.log(response);

            }
        }
        $('#btn_order').click(function() {
            var valMaloaiSan = $('#footballPitch').val();
            var valDate = $('#dateRequest').val();

            if (valMaloaiSan == 'default') {
                // alert('Vui lòng chọn loại sân!');
                toastr.error('Vui lòng chọn loại sân!', 'Chú ý!');
                return false;
            }

        })

        $('#footballPitch,#dateRequest').on('change keyup', function(e) {
            var footballPitch = $('#footballPitch').val();
            var dateRequest = $('#dateRequest').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.order.orderSearch') }}",
                data: {
                    footballPitch: footballPitch,
                    dateRequest: dateRequest
                },
                success: function(data) {
                    putPitchDetails = data.data;
                    console.log(putPitchDetails);
                    $(`.item_detail`).removeClass("disabled__item");
                    $(`.status`).html('Còn chỗ');
                    $.map(putPitchDetails, function(putPitchDetail, index) {
                        val = $(`.timeText_${putPitchDetail.khung_gio}`).val();
                        if (putPitchDetail.khung_gio == val) {
                            $(`.a_${val}`).addClass("disabled__item");
                            $(`.a_${val}`).css("background", 'red');
                            $(`.status_${ putPitchDetail.khung_gio }`).html(
                                'Hết chỗ');
                        }
                    });
                }
            });


        })

        $('.timeText_05:00-06:00').click(function() {
            console.log(23);
        })
    });
</script>
@endpush
