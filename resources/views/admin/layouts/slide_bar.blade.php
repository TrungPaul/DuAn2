<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
        <h4 class="brand-text font-weight-light text-uppercase">Admin SpaTime</h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-tree-view">
                    <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <!-- <li class="nav-item has-tree-view">
                <a href="" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dịch vụ</p>
                    </a>
                </li> -->
                <li class="nav-item has-tree-view">
                    <a href="{{ route('admin.listcate')}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Danh mục bài viết</p>
                    </a>
                </li>
                <li class="nav-item has-tree-view">
                    <a href="{{ route('admin.listpost')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Bài viết</p>
                    </a>
                </li>
                <li class="nav-item has-tree-view">
                    <a href="{{ route('admin.listcomment')}}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Bình luận</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="{{ route('admin.listuser')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Thành Viên</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="{{ route('admin.listspa')}}" class="nav-link">
                        <i class="nav-icon fas fa-spa"></i>
                        <p>
                        Spa
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.listcontact')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Liên hệ
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-tree-view">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Đăng xuất</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('titlePage')</h1>
                </div>
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol> -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
