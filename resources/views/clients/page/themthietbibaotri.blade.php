@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Thêm Thiết Bị Thay Thế Và Sửa Chữa</h2>
    <div class="card-body">
        <form action="" method="POST" >
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" >Dữ liệu không hợp lệ</div>
            @endif
            @csrf
            <div class="row">
                <div class="form-group mb-3">
                    <strong>ID Thiết Bị</strong>
                            <input type="text" name="id_thiet_bi" class="form-control" placeholder="ID thiết bị">
                                @error('id_thiet_bi')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="form-group mb-3">
                    <strong>Ngày Bảo Trì</strong>
                        <input type="text" name="ngay_bao_tri" class="form-control" placeholder="Ngày bảo trì" >
                            @error('ngay_bao_tri')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                </div>
                <div class="form-group mb-3">
                    <strong>Nội dung</strong>
                        <input type="text" name="noi_dung" class="form-control" placeholder="Nội dung">
                            @error('noi_dung')
                                    <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary ">Thêm Mới</button>
            </form>
                <a href="{{route('listThaythesuachua')}}"><button type="submit" class="btn btn-warning ">Quay Lại</button></a>
@endsection
