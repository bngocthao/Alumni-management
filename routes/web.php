<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CongViecController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\ChuyenNganhController;
use App\Http\Controllers\DonViController;
use App\Http\Controllers\TaiKhoanController;

Route::get('/', function () {
    return view('quan_ly.layout.master');
});

Route::resource('cong_viec', CongViecController::class);
Route::resource('cuu_sinh_vien', NguoiDungController::class);
Route::resource('chuyen_nganh', ChuyenNganhController::class);
Route::resource('don_vi', DonViController::class);
Route::resource('tai_khoan', TaiKhoanController::class);

