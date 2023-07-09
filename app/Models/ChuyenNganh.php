<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenNganh extends Model
{
    use HasFactory;

    protected $table = 'chuyen_nganh';
    protected $fillable = [
        'ten_chuyen_nganh',
        'ma_don_vi'
    ];

    public function don_vi(){
        return $this->belongsTo(DonVi::class, 'ma_don_vi', 'id');
    }

    public function nguoi_dung(){
        return $this->hasMany(NguoiDung::class, 'id', 'ma_chuyen_nganh');
    }
}
