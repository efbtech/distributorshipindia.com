@include('layouts.header')
<style>
#page-topbar,
.vertical-menu,
footer {
    display: none;
}
</style>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<!-- Background -->
<div class="account-pages"></div>
<!-- Begin page -->
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">

            <div class="auth-logo">
                <h3 class="text-center">
                    <a href="#!" class="logo d-block mt-4 mb-2">
                        <img src="{{ asset('assets/admin/images/logo/logo.svg') }}" class="logo-dark mx-auto"
                            height="75" alt="logo-dark">
                        <img src="{{ asset('assets/admin/images/logo/logo.svg') }}" class="logo-light mx-auto"
                            height="75" alt="logo-light">
                    </a>
                </h3>
            </div>

            <div class="p-3">
                <h4 class="text-muted font-size-18 text-center">Welcome Back !</h4>
                <p class="text-muted text-center">Sign in to continue to Distributorship India.</p>

                <form class="form-horizontal" action="{{ url('admin/login') }}" method="post" id="admin_login_form">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="username">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter username"
                            value="{{old('email')}}" placeholder="Enter Email ID" maxlength="90">
                        <div style="color:red;">{{ $errors->first('email') }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password" value="{{old('password')}}" maxlength="90">
                        <div id="errfirst"> <span style="color:red;">{{ $errors->first('password') }}</span> </div>
                        <div class="mt-2" style="color:red;">{{$errors->first('err_msg')}}</div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12 text-end">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12">
                            <a href="forgot-password.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                                password?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="text-center">
        <p>
            ©
            <script>
            document.write(new Date().getFullYear())
            </script> distributorshipindia.com . Designed by
            <a href="https://efbtechnology.com/" target="_blank">EFB Technology</a>
        </p>
    </div>

</div>
<!-- end main content-->
@include('layouts.footer')