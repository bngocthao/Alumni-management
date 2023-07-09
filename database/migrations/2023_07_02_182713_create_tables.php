<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('don_vi', function (Blueprint $table) {
            $table->id();
            $table->string('ten_don_vi');
            $table->timestamps();
        });
        Schema::create('chuyen_nganh', function (Blueprint $table) {
            $table->id();
            $table->string('ten_chuyen_nganh');
            $table->unsignedBigInteger('ma_don_vi')->nullable();
            $table->timestamps();
        });
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('ma_sinh_vien')->nullable();
            $table->string('ma_lop');
            $table->boolean('gioi_tinh');
            $table->boolean('ngay_sinh');
            $table->unsignedBigInteger('ma_chuyen_nganh');
            $table->string('dien_thoai_gia_dinh')->nullable();
            $table->string('dien_thoai_ca_nhan')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('email_sinh_vien')->nullable();
//            $table->unsignedBigInteger('nguoi_nhap')->nullable();
            $table->unsignedBigInteger('ma_cong_viec')->nullable();
            $table->timestamps();
        });
        Schema::create('cong_viec', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sinh_vien');
            $table->integer('viec_lam');
            $table->string('loai_don_vi')->nullable();
            $table->string('ten_don_vi')->nullable();
            $table->string('dia_chi_don_vi')->nullable();
            $table->string('don_vi_thuoc_tinh_thanh')->nullable();
            $table->timestamps();
        });
//        Schema::table('nguoi_dung', function(Blueprint $table){
//            $table->foreign('nguoi_nhap')->references('id')->on('nguoi_dung')
//            ->onUpdate('cascade');
//        });
        Schema::table('chuyen_nganh', function(Blueprint $table){
            $table->foreign('ma_don_vi')->references('id')->on('don_vi')
                ->onUpdate('cascade');
        });
        Schema::table('nguoi_dung', function(Blueprint $table){
            $table->foreign('ma_chuyen_nganh')->references('id')->on('chuyen_nganh')
                ->onUpdate('cascade');
            $table->foreign('ma_sinh_vien')->references('ma_sinh_vien')->on('cong_viec')
                ->onUpdate('cascade');
        });
        Schema::table('tai_khoan', function(Blueprint $table){
            $table->foreign('ma_nguoi_dung')->references('id')->on('nguoi_dung')
                ->onUpdate('cascade');
        });
        Schema::table('cong_viec', function(Blueprint $table){
            $table->foreign('ma_sinh_vien')->references('ma_sinh_vien')->on('nguoi_dung')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_vi');
        Schema::dropIfExists('chuyen_nganh');
        Schema::dropIfExists('nguoi_dung');
        Schema::dropIfExists('cong_viec');
    }
};
