<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    use HasFactory;

    protected $table = 'cong_viec';
    protected $fillable = [
        'ma_sinh_vien',
        'viec_lam',
        'loai_don_vi',
        'ten_don_vi',
        'dia_chi_don_vi',
        'don_vi_thuoc_tinh_thanh'
    ];
    public function nguoi_dung(){
        return $this->belongsTo(NguoiDung::class, 'ma_sinh_vien', 'ma_sinh_vien');
    }

    public function chuyen_nganh(){
        return $this->hasManyThrough(
            NguoiDung::class,
            ChuyenNganh::class,
            'ma_sinh_vien',
            'ma_chuyen_nganh',
            'ma_sinh_vien',
            'id'

        );
    }
}
