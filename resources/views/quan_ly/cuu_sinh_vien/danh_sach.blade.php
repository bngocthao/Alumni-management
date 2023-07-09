{{--phần header nhét thêm lib của table vào--}}
@section('headerScripts')
    @parent
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

{{--Kế thừa layout của master đưa bảng vào--}}
@extends('quan_ly.layout.master')

{{--thay tiêu đề--}}
@section('title','Danh sách cựu sinh viên')
{{--Đường dẫn hiển thị trên form--}}
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách cựu sinh viên</li>
        </ol>
    </div>
@endsection

{{--Thay nội dung--}}
@section('content')
    <div class="card">
        <div class="card-header">
{{--            <h3 class="card-title float-right">--}}
            <h3 class="card-title">
                <a href="{{route('cuu_sinh_vien.create')}}" type="button" class="btn btn-secondary"><i class="ion-plus-round"></i> &nbsp;Thêm sinh viên</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Mã lớp</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại cá nhân</th>
                    <th>Điện thoại gia đình</th>
                    <th>Email</th>
                    <th>Chuyên ngành</th>
                    <th>Công việc</th>
                    <th>Loại đơn vị</th>
                    <th>Tên đơn vị</th>
                    <th>Địa chỉ đơn vị</th>
                    <th>Đơn vị thuộc tỉnh/ thành</th>
                    <th>Công cụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cuu_sinh_vien as $usr)
                    <?php
                        // Trả về công việc mới nhất của cựu sinh viên
                        $usr_j = $usr->cong_viec->last() ?>
                    <tr>
                        <td>{{$usr->ma_sinh_vien}}</td>
                        <td>{{$usr->ho_ten}}</td>
                        <td>{{$usr->ngay_sinh}}</td>
                        <td>{{$usr->ma_lop}}</td>
                        <td>@if($usr->gioi_tinh == '0') Nam @else Nữ @endif</td>
                        <td>{{$usr->dia_chi}}</td>
                        <td>{{$usr->dien_thoai_ca_nhan}}</td>
                        <td>{{$usr->dien_thoai_gia_dinh}}</td>
                        <td>{{$usr->email_sinh_vien}}</td>
                        <td>{{$usr->chuyen_nganh->ten_chuyen_nganh}}</td>
                        <td>@if($usr_j->viec_lam == '0') Chưa có việc làm @else Có việc làm @endif</td>
                        <td>{{$usr_j->loai_don_vi}}</td>
                        <td>{{$usr_j->ten_don_vi}}</td>
                        <td>{{$usr_j->dia_chi_don_vi}}</td>
                        <td>{{$usr_j->don_vi_thuoc_tinh_thanh}}</td>
                        <td style="text-align: center;">
                            <a href="{{route('cuu_sinh_vien.edit', $usr_j->id)}}" type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            &nbsp;
                            <a href="{{route('cuu_sinh_vien.destroy', $usr->id)}}" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Mã lớp</th>
                    <th>Giới tính</th>
                    <th>Điện thoại cá nhân</th>
                    <th>Điện thoại gia đình</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Chuyên ngành</th>
                    <th>Công việc</th>
                    <th>Loại đơn vị</th>
                    <th>Tên đơn vị</th>
                    <th>Địa chỉ đơn vị</th>
                    <th>Đơn vị thuộc tỉnh/ thành</th>
                    <th>Công cụ</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

{{--phần footer nhét thêm lib của table vào--}}
@section('footerScripts')
    @parent
    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": [
                    { extend: 'copy', text: 'Sao chép bảng' },
                    { extend: 'csv', text: 'CSV' },
                    { extend: 'excel', text: 'Excel' },
                    { extend: 'pdf', text: 'PDF' },
                    { extend: 'print', text: 'In' },
                    { extend: 'colvis', text: 'Loại bỏ cột' },
            ]}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
