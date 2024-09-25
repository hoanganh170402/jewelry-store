
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    @include('admin.head')
</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">
<div class="login-box">
    <div class="login-logo"> <a href="#"><b>Admin</b></a> </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            @include('admin.alert')
            <form action="/admin/users/login/store" method="post">
                <div class="input-group mb-3"> <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                </div>
                <div class="input-group mb-3"> <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                </div> <!--begin::Row-->
                <div class="row">
                    <div class="col-8">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" name="remember" value="" id="remember"> <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label> </div>
                    </div> <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button> </div>
                    </div> <!-- /.col -->
                </div> <!--end::Row-->
                @csrf
            </form>
        </div> <!-- /.login-card-body -->
    </div>
</div> <!-- /.login-box -->
@include('admin.footer')
</body><!--end::Body-->

</html>
