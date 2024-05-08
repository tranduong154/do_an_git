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
        <th scope="col">Ngày làm việc</th>
        <th scope="col">Quyền</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach($personnels as $key => $personnel)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $personnel->ten }}</td>
        <td>{{ $personnel->ngay_sinh }}</td>
        <td>{{ $personnel->dia_chi }}</td>
        <td>{{ $personnel->sdt }}</td>
        <td>{{ $personnel->gioi_tinh }}</td>
        <td>{{ $personnel->quoc_tich }}</td>
        <td>{{ $personnel->ngay_lam_viec }}</td>
        @foreach($permissions as $permission)
          @if($permission->ma_quyen == $personnel->ma_quyen)
            <td>{{ $permission->ten }}</td>
          @endif
        @endforeach
        <td>
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.personnel.edit', ['id'=> $personnel->id]) }}" aria-expanded="false">
            Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
          </a>
          <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red" href="{{ route('admin.personnel.delete', ['id'=> $personnel->id]) }}" aria-expanded="false"
          onclick="return confirm('Ban co muon xoa khong?')">
          Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class="pagination justify-content-center">
    {!! $personnels->links() !!}
</div>