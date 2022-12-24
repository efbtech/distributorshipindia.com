<?php include 'header.php' ?>
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
                        <img src="assets/images/logo/logo.svg" class="logo-dark mx-auto" height="75" alt="logo-dark">
                        <img src="assets/images/logo/logo.svg" class="logo-light mx-auto" height="75" alt="logo-light">
                    </a>
                </h3>
            </div>

            <div class="p-3">
                <h4 class="text-muted font-size-18  text-center">Free Register</h4>
                <p class="text-muted text-center">Get your free Apni Roti account now.</p>

                <form class="form-horizontal " action="http://themesbrand.com/agroxa/layouts/index.html">

                    <div class="mb-3">
                        <label class="form-label" for="useremail">Email</label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12 text-end">
                            <button class="btn btn-primary w-md waves-effect waves-light"
                                type="submit">Register</button>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-12">
                            <p class="font-size-14 text-muted mb-0">By registering you agree to the Agroxa <a href="#" target="_blank"
                                    class="text-primary">Terms of Use</a></p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="text-center">
        <p class="text-white-50">Already have an account ? <a href="sign-in.php" class="text-white"> Signin Now
            </a> </p>
        <p class="text-muted">
            ©
            <script>
            document.write(new Date().getFullYear())
            </script> Apni roti. Designed by
            <a href="https://fictivebox.com/" target="_blank">Fictivebox</a>
        </p>
    </div>
</div>
<!-- end main content-->
<?php include 'footer.php' ?>