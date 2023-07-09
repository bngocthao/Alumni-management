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
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách đơn vị</li>
        </ol>
    </div>
@endsection

{{--Thay nội dung--}}
@section('content')
    <div class="card">
        <div class="card-header">
            {{--            <h3 class="card-title float-right">--}}
            <h3 class="card-title">
                <a href="{{route('don_vi.create')}}" type="button" class="btn btn-secondary"><i class="ion-plus-round"></i> &nbsp;Thêm đơn vị</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Mã đơn vị</th>
                    <th>Tên đơn vị</th>
                    <th>Công cụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($don_vi as $dv)
                    <tr>
                        <td>{{$dv->ma_don_vi}}</td>
                        <td>{{$dv->ten_don_vi}}</td>
                        <td>
                            <a href="{{route('don_vi.edit', $dv->id)}}">
                                <form action="{{route('don_vi.edit', $dv->id)}}" class="tabledit-edit-button btn btn primary waves-effect waves-light">
                                    @csrf
                                    @method('GET')
                                    <button class="btn btn-primary btn" type="submit" id="del-confirm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </form></a>
                            <a href="{{route('don_vi.destroy', $dv->id)}}"  onclick="return confirm('Bạn có muốn xóa ?')">
                                <form action="{{route('don_vi.destroy', $dv->id)}}" method="post" class="tabledit-edit-button btn btn primary waves-effect waves-light float-left">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn" type="submit">
                                        <i class="fas fa-trash"></i></button>
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Mã đơn vị</th>
                    <th>Tên đơn vị</th>
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
                    // { extend: 'copy', text: 'Sao chép bảng' },
                    // { extend: 'csv', text: 'CSV' },
                    // { extend: 'excel', text: 'Excel' },
                    // { extend: 'pdf', text: 'PDF' },
                    // { extend: 'print', text: 'In' },
                    // { extend: 'colvis', text: 'Loại bỏ cột' },
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
