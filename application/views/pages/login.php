<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 19:50:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Caring Store</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/'); ?>images/fav.png">
    <link href="<?php echo base_url('assets/'); ?>vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <style>
        body {
            background-image: url("./assets/images/bgimg.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .custom-bg {
            background: #EFF5F5
        }
    </style>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content custom-bg">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <h1>Caring Store</h1>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in as Administrator</h4>
                                  
                                    <form method="post" action="<?php echo base_url('/admin_login'); ?>">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="uname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="pass" class="form-control">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-block">Log In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/'); ?>vendor/global/global.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/custom.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/deznav-init.js"></script>

</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 19:50:58 GMT -->

</html>