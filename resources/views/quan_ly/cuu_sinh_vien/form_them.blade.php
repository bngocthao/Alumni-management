@section('headerScripts')
    @parent
@endsection

@extends('quan_ly.layout.master')

@section('title', 'Thêm sinh viên')

@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/cuu_sinh_vien">Danh sách cựu sinh viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Thêm mới
            </h3>
        </div>

        <form method="post" action="{{route('cuu_sinh_vien.store')}}" autocomplete="on">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="ma_sinh_vien" class="col-sm-2 col-form-label">Mã sinh viên
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ma_sinh_vien" id="ma_sinh_vien" placeholder="Mã sinh viên">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ho_ten" class="col-sm-2 col-form-label">Họ tên
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ho_ten" id="ho_ten" placeholder="Họ tên sinh viên">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ngay_sinh" class="col-sm-2 col-form-label">Ngày sinh
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ngay_sinh" id="ngay_sinh" placeholder="Ngày sinh">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="ma_chuyen_nganh" class="col-sm-2 col-form-label">Chuyên ngành
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input value="1" type="text" class="form-control" name="ma_chuyen_nganh" id="ma_chuyen_nganh" placeholder="Chuyên ngành">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ma_lop" class="col-sm-2 col-form-label">Mã lớp
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ma_lop" id="ma_lop" placeholder="Mã lớp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gioi_tinh" class="col-sm-2 col-form-label">Giới tính
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gioi_tinh" value="0">
                                <label class="form-check-label">Nam</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gioi_tinh" value="1">
                                    <label class="form-check-label">Nữ</label>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email_sinh_vien" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email_sinh_vien" id="email_sinh_vien" placeholder="Email sinh viên">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dien_thoai_ca_nhan" class="col-sm-2 col-form-label">Điện thoại cá nhân</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dien_thoai_ca_nhan" id="dien_thoai_ca_nhan" placeholder="Số điện thoại cá nhân">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dien_thoai_gia_dinh" class="col-sm-2 col-form-label">Điện thoại gia đình</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dien_thoai_gia_dinh" id="dien_thoai_gia_dinh" placeholder="Số điện thoại gia đình">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dia_chi" class="col-sm-2 col-form-label">Địa chỉ liên hệ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dia_chi" id="dia_chi" placeholder="Địa chỉ liên hệ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="viec_lam" class="col-sm-2 col-form-label">Trạng thái công việc</label>
                    <div class="col-sm-10">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input c-test" type="radio" name="viec_lam" value="0">
                                <label class="form-check-label" >Chưa có việc làm</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="viec_lam" value="1">
                                <label class="form-check-label">Đã có việc làm</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <p style="color: red">Không cần điền thông tin bên dưới nếu người dùng chưa có việc làm</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="loai_don_vi" class="col-sm-2 col-form-label">Loại đơn vị công ty</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control c-test-res" name="loai_don_vi" id="loai_don_vi" placeholder="Loại đơn vị">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ten_don_vi" class="col-sm-2 col-form-label">Tên đơn vị công ty</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ten_don_vi" id="ten_don_vi" placeholder="Tên đơn vị">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dia_chi_don_vi" class="col-sm-2 col-form-label">Địa chỉ đơn vị</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dia_chi_don_vi" id="dia_chi_don_vi" placeholder="Địa chỉ đơn vị">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="don_vi_thuoc_tinh_thanh" class="col-sm-2 col-form-label">Đơn vị trực thuộc tỉnh/ thành</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="don_vi_thuoc_tinh_thanh" id="don_vi_thuoc_tinh_thanh" placeholder="Đơn vị trực thuộc">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Tạo</button>
                <a href="/cuu_sinh_vien" type="button" class="btn btn-default float-right">Hủy</a>
            </div>
        </form>
    </div>


@endsection

@section('footerScripts')
    @parent
@endsection

