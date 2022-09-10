@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Thêm Thiết Bị</h2>
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
                    <strong>ID Thiết Bị Chuyển</strong>
                            <input type="text" name="id_may_chuyen" class="form-control" placeholder="ID thiết bị chuyển">
                                @error('id_may_chuyen')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="form-group mb-3">
                    <strong>Ngày Giao</strong>
                        <input type="text" name="ngay_giao" class="form-control" placeholder="Ngày giao" >
                            @error('ngay_giao')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                </div>
                <div class="form-group mb-3">
                    <strong>Ngày Thu Hồi</strong>
                        <input type="text" name="ngay_thu_hoi" class="form-control" placeholder="Ngày Thu Hồi">
                            @error('ngay_thu_hoi')
                                    <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group mb-1">
                    <strong>Tên Nhân Viên</strong>
                        <input type="text" name="ten_nhan_vien" class="form-control" placeholder="Tên Nhân Viên">
                            @error('ten_nhan_vien')
                                    <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary ">Thêm Mới</button>
            </form>
                <a href="{{route('listThietbi')}}"><button type="submit" class="btn btn-warning ">Quay Lại</button></a>
@endsection
