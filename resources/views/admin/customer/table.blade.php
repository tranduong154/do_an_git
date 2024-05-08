<table class="table table-striped">
    <thead class="thead-light">
      <tr class="bg_tr">
        <th scope="col">Id</th>
        <th scope="col">Tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Quốc tịch</th>
        <th scope="col">Quyền</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($customers as $key => $customer)
      <tr>
        <td>{{ $key +1 }}</td>
        <td>{{ $customer->ten }}</td>
        <td>{{ $customer->ngay_sinh }}</td>
        <td>{{ $customer->dia_chi }}</td>
        <td>{{ $customer->sdt }}</td>
        <td>{{ $customer->gioi_tinh }}</td>
        <td>{{ $customer->quoc_tich }}</td>
        @foreach($permissions as $permission)
          @if($permission->ma_quyen == $customer->ma_quyen)
            <td>{{ $permission->ten }}</td>
          @endif
        @endforeach
        <td>
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.customer.edit', ['id'=> $customer->id]) }}" aria-expanded="false">
            Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
          </a>
          <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red" href="{{ route('admin.customer.delete', ['id'=> $customer->id]) }}" aria-expanded="false"
          onclick="return confirm('Ban co muon xoa khong?')">
          Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class="pagination justify-content-center">
    {!! $customers->links() !!}
</div>