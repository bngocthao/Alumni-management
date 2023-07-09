<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    protected $table = 'nguoi_dung';
    protected $fillable = [
        'ho_ten',
        'ngay_sinh',
        'ma_sinh_vien',
        'ma_lop',
        'gioi_tinh',
        'ma_chuyen_nganh',
        'dien_thoai_gia_dinh',
        'dien_thoai_ca_nhan',
        'dia_chi',
    ];

    public function cong_viec(){
        return $this->hasMany(CongViec::class, 'ma_sinh_vien', 'ma_sinh_vien');
    }

    public function chuyen_nganh(){
        return $this->belongsTo(ChuyenNganh::class, 'ma_chuyen_nganh', 'id');
    }

    public function tai_khoan(){
        return $this->hasOne(TaiKhoan::class, 'id', 'ma_nguoi_dung');
    }
}
