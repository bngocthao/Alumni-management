<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;
use RealRashid\SweetAlert\Facades\Alert;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuu_sinh_viens = NguoiDung::with(['cong_viec', 'chuyen_nganh'])->get();

        $context = [
            'cuu_sinh_vien' => $cuu_sinh_viens,
        ];
        return view('quan_ly.cuu_sinh_vien.danh_sach', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quan_ly.cuu_sinh_vien.form_them');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->ma_sinh_vien === null && $request->viec_lam != null){
            alert()->error('Tạo thất bại');
            return redirect()->intended('/cuu_sinh_vien');
        }

        $save_usr = NguoiDung::create($request->all());
        $save_wk = CongViec::create($request->all());

        if (!$save_usr || !$save_wk) {
            alert()->error('Tạo thất bại');
        }else
            alert()->success('Tạo thành công');

        return redirect()->intended('/cuu_sinh_vien');
    }

    /**
     * Display the specified resource.
     */
    public function show(NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
//        $cuu_sinh_viens = NguoiDung::where('id', $id)->with(['cong_viec', 'chuyen_nganh'])->get();
        $csv_j = CongViec::where('id', $id)->get();
        $csv = NguoiDung::where('ma_sinh_vien', $csv_j[0]->ma_sinh_vien)->get();

        $context = [
            'id' => $id,
            'csv_j' => $csv_j,
            'csv' => $csv,
        ];

        return view('quan_ly.cuu_sinh_vien.chinh_sua', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,String $id)
    {
        $update = CongViec::find($id)->update($request->all());

        if ($update){
            alert()->success('Cập nhật thành công');
        }else
            alert()->success('Cập nhật thất bại');

        return redirect()->intended('/cuu_sinh_vien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $delete = CongViec::find($id)->delete();

        if ($delete){
            alert()->success('Xóa thành công');
        }else
            alert()->success('Xóa thất bại');

        return redirect()->intended('/cuu_sinh_vien');
    }
}
