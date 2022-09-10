@extends('layout.clients')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h2>Cập nhật Người Dùng</h2>
    <div class="card-body">
        <form action="" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{$Thietbi['id']}}">
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" >Dữ liệu không hợp lệ</div>
            @endif
            @csrf
            <div class="row">
                <div class="form-group">
                    <strong>Mã Thiết Bị</strong>
                            <input type="text" name="ma_thiet_bi" value="{{$Thietbi['ma_thiet_bi']}}" class="form-control" placeholder="Mã thiết bị">
                                @error('ma_thiet_bi')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="form-group">
                    <strong>Tên Máy</strong>
                        <input type="text" name="ten_may" value="{{$Thietbi['ten_may']}}" class="form-control" placeholder="Tên máy" >
                            @error('ten_may')
                                <span style="color: red">{{$message}}</span>
                            @enderror
                </div>
                <div class="form-group">
                    <strong>Người Sử Dụng</strong>
                        <input type="text" name="nguoi_su_dung" value="{{$Thietbi['nguoi_su_dung']}}" class="form-control" placeholder="Người sử dụng">
                            @error('nguoi_su_dung')
                                    <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <strong>Cấu Hình Máy</strong>
                    <input type="text" name="cau_hinh_may" value="{{$Thietbi['cau_hinh_may']}}" class="form-control" placeholder="Cấu hình máy" >
                        @error('cau_hinh_may')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <strong>Số Lượng</strong>
                    <input type="text" name="so_luong" value="{{$Thietbi['so_luong']}}"  class="form-control" placeholder="Số lượng">
                </div>
                    @error('so_luong')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                <div class="form-group">
                    <strong>Phòng Ban</strong>
                    <input type="text" name="phong_ban" value="{{$Thietbi['phong_ban']}}" class="form-control" placeholder="Phòng ban">
                </div>
                        @error('phong_ban')
                            <span style="color: red">{{$message}}</span>
                        @enderror

                <div class="form-group mb-3">
                    <strong>Ghi Chú</strong>
                    <input type="text" name="ghi_chu" value="{{$Thietbi['ghi_chu']}}" class="form-control" placeholder="Ghi chú">
                        @error('ghi_chu')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary ">Cập nhật</button>

            </form>
            <a href="{{route('listNguoidung')}}"><button type="submit" class="btn btn-warning ">Quay Lại</button></a>
        </div>
    </div>
</div>

@endsection
