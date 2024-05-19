<table class="table table-striped">
    <thead class="thead-light">
        <tr class="bg_tr">
            <th scope="col">Id</th>
            <th scope="col">Tên người đặt</th>
            <th scope="col">SDT người đặt</th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Tên sân</th>
            <th scope="col">Khung giờ</th>  
            <th scope="col">Ngày sử dụng</th>
            <th>Số tiền thanh toán</th>
            <th scope="col">Trạng thái</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @php
        use App\Models\FootballPitch;
        @endphp
        @foreach($putPitchs as $key => $putPitch)
        <tr>
            <td>{{ $key +1 }}</td>
            <td>{{ $putPitch->ten_nguoi_dat }}</td>
            <td>{{ $putPitch->sdt_nguoi_dat }}</td>
            <td>{{ $putPitch->ngay_dat }}</td>
            @foreach($footballPitchs as $key => $footballPitch)
            @if($footballPitch['id'] == $putPitch->ma_san)
            <td> {{ $footballPitch['ten'] }} </td>
            @endif
            @endforeach
            @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
            @if($key == $putPitch->khung_gio)
            <td> {{ $item }} </td>
            @endif
            @endforeach
            <td>{{ $putPitch->ngay_su_dung }}</td>
            <td>{{ number_format($putPitch->gia_tien) }} VND</td>
            @foreach($statusPutPitchs as $statusPutPitch)
            @if($statusPutPitch['id'] == $putPitch->ma_trang_thai)
            @if($statusPutPitch['id'] == 2)
            <td class="align-middle text-sm">
                <span class="badge badge-sm badge-success">{{ $statusPutPitch['ten_trang_thai'] }} </span>
            </td>
            @elseif($statusPutPitch['id'] == 1)
            <td class="align-middle text-sm">
                <span class="badge badge-sm badge-warning">{{ $statusPutPitch['ten_trang_thai'] }} </span>
            </td>
            @else
            <td class="align-middle text-sm">
                <span class="badge badge-sm badge-danger">{{ $statusPutPitch['ten_trang_thai'] }} </span>
            </td>
            @endif
            @endif
            @endforeach
            <td>
                {{-- <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="{{ route('admin.putPitch.edit', ['id'=> $putPitch->id]) }}" aria-expanded="false">
                    Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
                </a> --}}
                <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red"
                    href="{{ route('admin.putPitch.delete', ['id'=> $putPitch->id]) }}" aria-expanded="false"
                    onclick="return confirm('Ban co muon xoa khong?')">
                    Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination justify-content-center">
    {!! $putPitchs->links() !!}
</div>