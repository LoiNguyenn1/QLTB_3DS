<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suachuathaythe;

class SuachuathaytheController extends Controller
{
    public function listThaythesuachua(){
        $title = 'Thay Thế & Sửa Chữa';
        $Suachuathaythe = Suachuathaythe::all();
        return view('clients.page.thaythesuachua' , compact('title' , 'Suachuathaythe'));
    }
    public function themThaythesuachua()
    {
        $title = 'Thêm Thiết Bị Bảo Trì';
        return view ('clients.page.themthietbibaotri' , compact('title'));
    }
    public function store(Request $request)
    {
        $request ->validate([
            'id_thiet_bi' => 'required|min:2',
            'ngay_bao_tri' => 'required',
            'noi_dung' => 'required',
        ],
        [
            'id_thiet_bi.required' =>'Mã thiết bị bắt buộc phải nhập',
            'id_thiet_bi.min' =>'Mã thiết bị phải lớn hơn :min ký tự ',
            'ngay_bao_tri.required' => 'Ngày bảo trì máy bắt buộc phải nhập ',
            'noi_dung.required' => 'Nội dung bắt buộc phải nhập '
        ]);
        // $dataInsert = [
        //     $request->id_thiet_bi,
        //     $request->ngay_bao_tri,
        //     $request->noi_dung,
        //];
        // Validate the request...
        $Suachuathaythe = new Suachuathaythe;
        $Suachuathaythe->id_thiet_bi = $request->id_thiet_bi;
        $Suachuathaythe->ngay_bao_tri = $request->ngay_bao_tri;
        $Suachuathaythe->noi_dung = $request->noi_dung;
        $Suachuathaythe->save();
        return redirect()->route('listThaythesuachua')->with('msg','Thêm thiết bị dùng thành công');
    }
    public function deleteThaythesuachua($id){
            //dd($id);
        $Suachuathaythe = Suachuathaythe::find($id);
        $Suachuathaythe->delete();
        return redirect()->route('listThaythesuachua')->with('msg', 'Xóa thiết bị thành công');
    }
    public function capnhatthaythesuachua($id){
        $title = ' Cập nhật thay thế sửa chữa';
        $Suachuathaythe = Suachuathaythe::find($id);
        return view('clients.page.capnhatthaythesuachua', compact('title' , 'Suachuathaythe'));
    }
    public function updatethaythesuachua(Request $request){
        $Suachuathaythe = Suachuathaythe::find($request->id);
        $Suachuathaythe->id_thiet_bi = $request->id_thiet_bi;
        $Suachuathaythe->ngay_bao_tri = $request->ngay_bao_tri;
        $Suachuathaythe->noi_dung = $request->noi_dung;
        $Suachuathaythe->save();
        return redirect()->route('listThaythesuachua')->with('msg', 'Cập nhật thiết bị thành công');
    }
}
