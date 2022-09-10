@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Danh Sách Người Dùng</h2>
    <div class="row">
        <div class="col-4">
            <a href="{{route('themnguoidung')}}" class="btn btn-primary">Thêm Người Dùng</a>
        </div>
    </div>
    <hr/>
    <table class="table table-bodered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Mã Thiết Bị </th>
                <th>Số Lượng</th>
                <th>Tên Máy</th>
                <th>Người Sử Dụng</th>
                <th>Phòng Ban</th>
                <th>Cấu Hình Máy</th>
                <th>Ghi Chú</th>
                <th width = "12%">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @if (!@empty($Thietbi))
                @foreach($Thietbi as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->ma_thiet_bi}}</td>
                <td>{{$item->so_luong}}</td>
                <td>{{$item->ten_may}}</td>
                <td>{{$item->nguoi_su_dung}}</td>
                <td>{{$item->phong_ban}}</td>
                <td>{{$item->cau_hinh_may}}</td>
                <td>{{$item->ghi_chu}}</td>
                <td>
                    <a href="{{route('capnhatnguoidung',['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <a href="{{route('delete-Nguoidung',['id'=>$item->id])}}"><button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</button></a>
                </td>
            </tr>
                @endforeach
                @else
                    <tr>
                        <td>Không có người dùng </td>
                    </tr>
                @endif
        </tbody>
    </table>

@endsection
