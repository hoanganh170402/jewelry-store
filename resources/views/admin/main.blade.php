
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    @include('admin.head')
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
<div class="app-wrapper"> <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list" style="color: #000; font-size: 1.5rem; position: relative; top: -4px"></i> </a> </li>
            </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
                <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                {{--                <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="/template/admin/dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>--}}
                {{--                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->--}}
                {{--                        <li class="user-header text-bg-primary"> <img src="/template/admin/dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image">--}}
                {{--                            <p>--}}
                {{--                                Alexander Pierce - Web Developer--}}
                {{--                                <small>Member since Nov. 2023</small>--}}
                {{--                            </p>--}}
                {{--                        </li> <!--end::User Image--> <!--begin::Menu Body-->--}}
                {{--                        <li class="user-body"> <!--begin::Row-->--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-4 text-center"> <a href="#">Followers</a> </div>--}}
                {{--                                <div class="col-4 text-center"> <a href="#">Sales</a> </div>--}}
                {{--                                <div class="col-4 text-center"> <a href="#">Friends</a> </div>--}}
                {{--                            </div> <!--end::Row-->--}}
                {{--                        </li> <!--end::Menu Body--> <!--begin::Menu Footer-->--}}
                {{--                        <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->--}}
                {{--                    </ul>--}}
                {{--                </li> <!--end::User Menu Dropdown-->--}}
            </ul> <!--end::End Navbar Links-->
        </div> <!--end::Container-->
    </nav> <!--end::Header-->

    @include('admin.sidebar')

    <!--begin::App Main-->
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="mb-0">{{$title}}</h3>

                        @yield('content')
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
    <footer class="app-footer"> <!--begin::To the end-->
        <!--begin::Copyright--> <strong>
            Copyright &copy; 2014-2024&nbsp;
            <a href="#" class="text-decoration-none">b.t.h.a_</a>
        </strong>
        <!--end::Copyright-->
    </footer> <!--end::Footer-->
</div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
@include('admin.footer')
</body><!--end::Body-->

</html>
