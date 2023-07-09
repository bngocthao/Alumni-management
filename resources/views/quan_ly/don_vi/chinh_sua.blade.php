@section('headerScripts')
    @parent
@endsection

@extends('quan_ly.layout.master')

@section('title', 'Chỉnh sửa đơn vị')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/don_vi">Danh sách đơn vị</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Chỉnh sửa
            </h3>
        </div>

        <form method="POST" action="{{route('don_vi.update', $id)}}" autocomplete="on">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label for="ma_don_vi" class="col-sm-2 col-form-label">Mã đơn vị
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ma_don_vi" id="ma_don_vi" value="{{$don_vi->ma_don_vi}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ten_don_vi" class="col-sm-2 col-form-label">Tên đơn vị</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ten_don_vi" id="ten_don_vi" value="{{$don_vi->ten_don_vi}}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button href="{{route('don_vi.update', $don_vi->id)}}" type="submit" class="btn btn-primary">Cập nhật</button>
                <button href="/don_vi" type="button" class="btn btn-default float-right">Hủy</button>
            </div>
        </form>
    </div>
@endsection

@section('footerScripts')
    @parent
@endsection
