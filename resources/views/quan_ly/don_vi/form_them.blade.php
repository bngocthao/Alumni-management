@section('headerScripts')
    @parent
@endsection

@extends('quan_ly.layout.master')

@section('title', 'Thêm đơn vị')

@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/don_vi">Danh sách đơn vị</a></li>
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

        <form method="post" action="{{route('don_vi.store')}}" autocomplete="on">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="ma_don_vi" class="col-sm-2 col-form-label">Mã đơn vị
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ma_don_vi" id="ma_don_vi" placeholder="Mã đơn vị">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ten_don_vi" class="col-sm-2 col-form-label">Tên đơn vị
                        (<svg xmlns="http://www.w3.org/2000/svg" color="red" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>)
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ten_don_vi" id="ten_don_vi" placeholder="Tên đơn vị">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Tạo</button>
                <a href="/don_vi" type="button" class="btn btn-default float-right">Hủy</a>
            </div>
        </form>
    </div>


@endsection

@section('footerScripts')
    @parent
@endsection

