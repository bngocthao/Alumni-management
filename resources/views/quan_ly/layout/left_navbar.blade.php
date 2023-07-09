
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

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="nav-icon fas fa-search"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('cuu_sinh_vien.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Danh sách cựu sinh viên
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href='{{route('chuyen_nganh.index')}}' class="nav-link">
                        <i class="nav-icon fas fa-door-open"></i>
                        <p>
                            Danh sách chuyên ngành
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=#" class="nav-link">
                        <i class="nav-icon fas fa-door-closed"></i>
                        <p>
                            Danh sách đơn vị
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
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



