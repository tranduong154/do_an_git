<table class="table table-condensed">
    <thead>
        <tr class="cart_menu" style="background: #2eca6a;font-size: 16px;color: black;font-weight: 600;">
            <td class="image">Mã đặt sân</td>
            <td class="description">Loại sân</td>
            <td class="description">Khung giờ</td>
            <td class="price">Loại nước</td>
            <td class="quantity">Số lượng nước</td>
            <td class="total">Ngày sử dụng</td>
            <td class="total">Trạng Thái</td>
            <td class="total">Tổng tiền</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @php
            use App\Models\FootballPitch;
        @endphp
        @foreach ($historyOrders as $key => $historyOrder)
            <tr id="{{ $key }}">
                <td class="cart_product">
                    {{ $historyOrder['ma_dat_san'] }}
                </td>
                <td class="cart_description">
                    @foreach ($footballPitchs as $footballPitch)
                        @if ($historyOrder['ma_san'] == $footballPitch['id'])
                            {{ $footballPitch['ten'] }}
                        @endif
                    @endforeach
                </td>
                <td class="cart_price">
                    @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                        @if ($key == $historyOrder['khung_gio'])
                            {{ $item }}
                        @endif
                    @endforeach
                </td>
                <td class="cart_quantity">
                    @php
                        if ($historyOrder['ma_loai_dv'] == 1) {
                            echo 'Nước khoáng lạc';
                        }
                        if ($historyOrder['ma_loai_dv'] == 2) {
                            echo 'Nước lọc';
                        }
                        if ($historyOrder['ma_loai_dv'] == 3) {
                            echo 'Nước chanh muối';
                        }
                        
                    @endphp
                </td>
                <td class="cart_quantity">
                    {{ $historyOrder['so_luong_dv'] }} chai
                </td>
                <td class="cart_quantity">
                    {{ $historyOrder['ngay_su_dung'] }}
                </td>
                <td class="cart_quantity">
                    {{ $historyOrder['ngay_gio_huy'] == null ? 'Đã đặt' : 'Đã hủy' }}
                </td>
                <td class="cart_quantity">
                    {{ number_format($historyOrder['gia_tien']) }} VND
                </td>
                <td class="cart_delete">
                    @if ($historyOrder['ngay_gio_huy'] != null || strtotime($today) > strtotime($historyOrder['ngay_su_dung']))
                        <button style="background: red;
                                        border-radius: 5px;
                                        padding: 0 5px;">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: white"
                                href="{{ route('frontend.checkout.delete', ['id' => $historyOrder['id']]) }}"
                                aria-expanded="false" onclick="return confirm('Ban co muon xoa khong?')">Xóa
                            </a>
                        </button>
                    @else
                        <button style="background: cadetblue;
                                        border-radius: 5px;
                                        padding: 0 5px;">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: white"
                                href="{{ route('frontend.checkout.update', ['id' => $historyOrder['id']]) }}"
                                aria-expanded="false" onclick="return confirm('Ban chắc chắn muon hủy sân không?')">Hủy
                                sân
                            </a>
                        </button>
                        <button style="background: red;
                                        border-radius: 5px;
                                        padding: 0 5px;">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: white"
                                href="{{ route('frontend.checkout.delete', ['id' => $historyOrder['id']]) }}"
                                aria-expanded="false" onclick="return confirm('Ban co muon xoa khong?')">Xóa
                            </a>
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination justify-content-center">
    {!! $historyOrders->links() !!}
</div>
