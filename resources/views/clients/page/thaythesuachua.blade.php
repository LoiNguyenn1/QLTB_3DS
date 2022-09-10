@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Thay Thế Và Sửa Chữa</h2>
    <a href="{{route('themThaythesuachua')}}" class="btn btn-primary">Thêm Thiết Bị Bảo Trì</a>
    <hr />
    <table class="table table-bodered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>ID Thiết Bị</th>
                <th>Ngày Bảo Trì</th>
                <th>Nội Dung</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @if (!@empty($Suachuathaythe))
                @foreach($Suachuathaythe as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->id_thiet_bi}}</td>
                <td>{{$item->ngay_bao_tri}}</td>
                <td>{{$item->noi_dung}}</td>
                <td>

                    <a href="{{route('capnhatthaythesuachua',['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <a href="{{route('delete-Thaythesuachua',['id'=>$item->id])}}">
                        <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Bạn có muốn xóa không ?')">Xóa</button>
                    </a>

                </td>
            </tr>
                @endforeach
                @else
                    <tr>
                        <td>Không có thiết bị </td>
                    </tr>
                @endif
        </tbody>
    </table>
@endsection
