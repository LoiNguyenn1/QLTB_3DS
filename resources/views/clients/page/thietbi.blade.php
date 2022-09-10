@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Bàn Giao Thiết Bị</h2>
    <a href="{{route('themThietbi')}}" class="btn btn-primary">Thêm Thiết Bị</a>
    <hr/>
    <table class="table table-bodered">
        <thead>
            <tr>
                <th width = "5%">STT</th>
                <th>ID Thiết Bị Chuyển</th>
                <th>Ngày Giao</th>
                <th>Ngày Thu Hồi</th>
                <th>Tên Nhân Viên</th>
                <th width = "15%">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @if (!@empty($Nguoisudung))
                @foreach($Nguoisudung as $key =>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->id_may_chuyen}}</td>
                <td>{{$item->ngay_giao}}</td>
                <td>{{$item->ngay_thu_hoi}}</td>
                <td>{{$item->ten_nhan_vien}}</td>
                <td>
                    {{-- <form action="" method=""> --}}
                        <a href="{{route('capnhatthietbi',['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <a href="{{route('delete-Thietbi',['id'=>$item->id])}}">
                            <button type="submit"class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</button></a>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td>Không có người dùng</td>
                </tr>
            @endif
        </tbody>


    </table>
@endsection
