<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nguoisudung;

class ThietbiController extends Controller
{
    public function listThietbi(){
        $title = 'Danh sách người dùng';
        $Nguoisudung = Nguoisudung::all();
        //dd($Thietbi);
        return view('clients.page.thietbi' , compact('title' , 'Nguoisudung'));
    }
    public function themThietbi()
    {
        $title ='Thêm Thiết Bị';
        return view('clients.page.themthietbi' , compact('title'));
    }
    public function store(Request $request)
    {
        $request ->validate([
            'id_may_chuyen' => 'required|min:2',
            'ngay_giao' => 'required',
            'ngay_thu_hoi' => 'required',
            'ten_nhan_vien' => 'required'
        ],
        [
            'id_may_chuyen.required' =>'ID thiết bị bắt buộc phải nhập',
            'id_may_chuyen.min' =>'ID thiết bị phải lớn hơn :min ký tự ',
            'ngay_giao.required' => 'Ngày giao máy bắt buộc phải nhập ',
            'ngay_thu_hoi.required' => 'Ngày thu bắt buộc phải nhập ',
            'ten_nhan_vien' => 'Tên nhân viên bắt buộc nhập '
        ]);
        $Nguoisudung = new Nguoisudung;
            $Nguoisudung->id_may_chuyen = $request->id_may_chuyen;
            $Nguoisudung->ngay_giao = $request->ngay_giao;
            $Nguoisudung->ngay_thu_hoi = $request->ngay_thu_hoi;
            $Nguoisudung->ten_nhan_vien = $request ->ten_nhan_vien;
            $Nguoisudung ->save();
        return redirect()->route('listThietbi')->with('msg','Thêm thiết bị thành công');
    }
    public function deleteThietbi($id){
        //dd($id);
        $Nguoisudung=Nguoisudung::find($id);
        $Nguoisudung->delete();
        return redirect()->route('listThietbi')->with('msg','Xóa thiết bị thành công');
    }
    public function capnhatthietbi($id){
        $title = 'Cập nhật thiết bị';
        $Nguoisudung = Nguoisudung::find($id);
        return view('clients.page.capnhatthietbi',compact( 'title','Nguoisudung' ));
    }
    public function updatethietbi(Request $request){
        //$title = 'Cập nhật thiết bị';
        $Nguoisudung = Nguoisudung::find($request->id);
        $Nguoisudung->id_may_chuyen = $request->id_may_chuyen;
        $Nguoisudung->ngay_giao = $request->ngay_giao;
        $Nguoisudung->ngay_thu_hoi = $request->ngay_thu_hoi;
        $Nguoisudung->ten_nhan_vien = $request->ten_nhan_vien;
        $Nguoisudung->save();
        //dd($Nguoisudung);
        return redirect()->route('listThietbi')->with('msg','Cập nhật thiết bị thành công');

    }


}
