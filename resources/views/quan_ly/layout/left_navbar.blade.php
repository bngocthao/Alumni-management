
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <i class="nav-icon fas fa-user-graduate"></i> &nbsp;
        <span class="brand-text font-weight-light">Quản Lý Cựu Sinh Viên</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--            <div class="image">--}}
{{--                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
            <div class="info">
                <a href="#" class="d-block">Trang quản lý - Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        &nbsp;
                        <p>
                            Quản lý cựu sinh viên
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{route('cuu_sinh_vien.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Csv và công việc hiện tại
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách cựu sinh viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href='{{route('chuyen_nganh.index')}}' class="nav-link">
{{--                        <i class="nav-icon fas fa-door-open"></i>--}}
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Danh sách chuyên ngành
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('don_vi.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Danh sách đơn vị
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Danh sách tài khoản
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



