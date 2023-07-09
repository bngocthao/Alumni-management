<?php

namespace App\Http\Controllers;

use App\Models\DonVi;
use Illuminate\Http\Request;

class DonViController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $don_vi = DonVi::all();

        $context = [
            'don_vi' => $don_vi,
        ];

        return view('quan_ly.don_vi.danh_sach', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quan_ly.don_vi.form_them');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $don_vi = DonVi::create($request->all());

        if (!$don_vi) {
            alert()->error('Tạo thất bại');
        }else
            alert()->success('Tạo thành công');

        return redirect()->intended('/don_vi');
    }

    /**
     * Display the specified resource.
     */
    public function show(DonVi $donVi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $don_vi = DonVi::find($id);

        $context = [
            'id' => $id,
            'don_vi' => $don_vi,
        ];

        return view('quan_ly.don_vi.chinh_sua', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,String $id)
    {
        $update = DonVi::find($id)->update($request->all());

        if ($update){
            alert()->success('Cập nhật thành công');
        }else
            alert()->success('Cập nhật thất bại');

        return redirect()->intended('/don_vi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $delete = DonVi::find($id)->delete();

        if ($delete){
            alert()->success('Xóa thành công');
        }else
            alert()->success('Xóa thất bại');

        return redirect()->intended('/don_vi');
    }
}
