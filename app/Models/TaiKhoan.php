<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'tai_khoan';
    protected $fillable = [
        'ten_tai_khoan',
        'ma_nguoi_dung',
        'vai_tro',
        'email',
        'mat_khau'
    ];

    public function nguoi_dung(){
        $this->hasOne(NguoiDung::class, 'ma_nguoi_dung', 'id');
    }
}
