<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Thietbi;

class NguoisudungController extends Controller
{
    public function listNguoidung()
    {
        $title = 'Danh Sách Thiết Bị';
        $Thietbi = Thietbi::all();
        $Thietbi = new Thietbi;
        if($ten_may= request()->ten_may)
            {
                $Thietbi = $Thietbi->where('ten_may','like',"%".request()->ten_may."%");
            }
        $Thietbi = $Thietbi->get();
        //dd($Thietbi);
        return view('clients.page.nguoidung' , compact('title' , 'Thietbi'))->with('i',(request()->input('page',1)-1)*10);
    }
    public function themNguoidung(){
        $title = 'Thêm người dùng';
        return view ('clients.page.themnguoidung' , compact('title'));
    }
    public function store(Request $request){
        $request ->validate([
            'ma_thiet_bi' => 'required|min:2|unique:thiet_bi',
            'ten_may' => 'required',
            'nguoi_su_dung' => 'required',
            'cau_hinh_may'=>'required',
            'so_luong' =>'required',
            'phong_ban' =>'required',
            'ghi_chu'=> 'required'
        ],
        [
            'ma_thiet_bi.required' =>'Mã thiết bị bắt buộc phải nhập',
            'ma_thiet_bi.min' =>'Mã thiết bị phải lớn hơn :min ký tự ',
            'ma_thiet_bi.unique' => 'Mã thiết bị đã tồn tại ',
            'ten_may.required' => 'Tên máy bắt buộc phải nhập ',
            'nguoi_su_dung.required' => 'Người sử dụng bắt buộc phải nhập ',
            'cau_hinh_may.required' => 'Cấu hình máy bắt buộc phải nhập ',
            'so_luong.required'=> 'Số lượng máy bắt buộc phải nhập',
            'phong_ban.required' => 'Phòng ban bắt buộc phải nhập ',
            'ghi_chu.required' => 'Ghi chú bắt buộc phải nhập ',
        ]);
            $Thietbi = new Thietbi;
            $Thietbi->ma_thiet_bi = $request->ma_thiet_bi;
            $Thietbi->ten_may = $request ->ten_may;
            $Thietbi ->nguoi_su_dung = $request->nguoi_su_dung;
            $Thietbi ->cau_hinh_may = $request->cau_hinh_may;
            $Thietbi ->so_luong = $request->so_luong;
            $Thietbi ->phong_ban = $request->phong_ban;
            $Thietbi ->ghi_chu = $request ->ghi_chu;
            $Thietbi -> save();
            return redirect()->route('listNguoidung')->with('msg','Thêm người dùng thành công');
    }
    public function deleteNguoisudung($id){
        //dd($id);
        $Thietbi = Thietbi::find($id);
        $Thietbi->delete();
        return redirect()->route('listNguoidung')->with('msg','Xóa người dùng thành công');
    }
    public function capnhatnguoidung($id){
        $title = 'Cập nhật người dùng';
        $Thietbi = Thietbi::find($id);
        return view('clients.page.capnhatnguoidung' , compact('title' , 'Thietbi'));
    }
    public function updatenguoidung(Request $request){
        //$title = 'Cập nhật người dùng';
        $Thietbi = Thietbi::find($request->id);
        $Thietbi->ma_thiet_bi = $request->ma_thiet_bi;
        $Thietbi->ten_may = $request->ten_may;
        $Thietbi->nguoi_su_dung = $request->nguoi_su_dung;
        $Thietbi->cau_hinh_may = $request->cau_hinh_may;
        $Thietbi->so_luong = $request->so_luong;
        $Thietbi->phong_ban = $request->cau_hinh_may;
        $Thietbi->ghi_chu = $request->ghi_chu;
        $Thietbi->save();
        //dd($Thietbi);
        return redirect()->route('listNguoidung')->with('msg','Cập nhật người dùng thành công');
    }

}
