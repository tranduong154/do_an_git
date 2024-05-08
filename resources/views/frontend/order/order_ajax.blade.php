@php
use App\Models\FootballPitch;
@endphp

<form action="{{ route('frontend.order.post') }}" method="post" id="formOrderFootballPitch">
    @csrf
    <div class="orders__option">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại sân</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="ma_loai_san">
                        <option>----Chọn loại sân----</option>
                        @foreach ($listFootballPitch as $footballPitch)
                            <option value="{{ $footballPitch->ma_loai_san }}">{{ $footballPitch->ten }}</option>
                            
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Ngày giờ</label>
                    <input type="date" class="form-control" name="ngay_order" id="dateRequest" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                </div>
            </div>

        </div>
    </div>
    <div id="content-tab">
        <div class="active">
            <table class="table table-dark">
                <tbody>
                    @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                        @if (($loop->iteration - 1) % 5 == 0)
                            <tr>
                        @endif
                        <td class="text-center item_detail" data-time="{{ $key }}">
                            <h4>{{ $item }}</h4>
                            <span>Còn chỗ</span><br>
                            <div class=" row water mb-2">
                                <div class="col-md-3">
                                    <span>Nước:</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="chitiet[{{ $key }}][water_qty]"
                                        class="qty-item text-center water_qty" disabled>
                                </div>
                            </div>
                            <div class="row ball">
                                <div class="col-md-3">
                                    <span>Bóng:</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="chitiet[{{ $key }}][ball_qty]"
                                        class="qty-item text-center ball_qty" disabled>
                                </div>
                            </div>
                        </td>
                        @if ($loop->iteration % 5 == 0)
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div class="float-right">
                <button class="btn btn-primary" type="submit">Đặt sân</button>
            </div>
        </div>
    </div>
</form>
@push('after-scripts')
<script>
    $(document).ready(function() {
        $('.item_detail').click(function() {
            if (!$(this).hasClass("active__item")) {
                $(this).find('.qty-item').attr('disabled', false);
                console.log($(this).find('.qty-item'));
                $(this).addClass("active__item");
            } else {
                $(this).removeClass("active__item");
                $(this).find('.qty-item').attr('disabled', true);
            }
        });

        $('.water_qty, .ball_qty').on('click change keyup', function(e) {
            e.stopPropagation();
        });

        async function getScheduleOrder(date) {
            let url = "{{ route('api.frontend.get-schedule') }}";
            let response = await axios.get(url, {params: {'date': date}});
            if (response) {
                console.log(response);
                
            }
        }
    });
</script>
@endpush