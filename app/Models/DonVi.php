<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class DonVi extends Model
{
    use HasFactory;

    protected $table = 'don_vi';
    protected $fillable = [
        'ten_don_vi',
    ];
    public function chuyen_nganh(){
        $this->hasMany(ChuyenNganh::class, 'id', 'ma_don_vi');
    }
}
