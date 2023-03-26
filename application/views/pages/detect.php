<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 04:43:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mediqu : Mediqu Hospital Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="Mediqu : Mediqu Hospital Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="Mediqu : Mediqu Hospital Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Pakila'ea Face Recognition</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets//'); ?>images/fav.png">
    <link href="<?php echo base_url('assets/'); ?>vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets//'); ?>vendor/chartist/css/chartist.min.css">
    <link href="<?php echo base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets//'); ?>vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets//'); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets//'); ?>cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets//'); ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url('assets//'); ?>vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets//'); ?>css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="form-head d-flex my-4 mb-md-5 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h3 class="text-primary font-w600">Welcome to Face Recognition Login System!</h3>
                    <a href="<?= base_url("/dashboard"); ?>" class="mb-0"><span class="nav-text">Dashboard</span></a>
                </div>


            </div>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12 d-flex justify-content-center align-items-center">

                                <video id="videoElement" autoplay playsinline style="width:600px;height:400px;border:1px solid blue;">

                                </video>
                                <canvas id="canvas" style="width:540px;height:375px;z-index:1000;position:absolute;border: 1px solid black"></canvas>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">User's Information</h4>
                                    <form>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Fullname</strong></label>
                                            <input id="fname" disabled type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Course:</strong></label>
                                            <input type="text" disabled id="course" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Year</strong></label>
                                            <input type="text" disabled id="yrsec" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Position</strong></label>

                                            <input type="text" disabled id="yrsec" class="form-control">
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12">
                    <div class="row">
                        <!-- <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12"> -->



                        <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <div id="signal-box" class="d-flex justify-content-around align-items-center">
                                    <div class="widget-stat card bg-warning">
							            <div class="card-body p-4">
                                            <div class="media">
                                            
                                                <div class="media-body text-white">
                                                
                                                    <h3 class="text-white">Instructor</h3>
                                                
                                               
                                                </div>
                                            </div>
                                    </div>
						        </div>
                                <div class="widget-stat card bg-warning">
							            <div class="card-body p-4">
                                            <div class="media">
                                            
                                                <div class="media-body text-white">
                                                
                                                    <h3 class="text-white">Staff</h3>
                                                
                                               
                                                </div>
                                            </div>
                                    </div>
						        </div>
                                <div class="widget-stat card bg-success">
							            <div class="card-body p-4">
                                            <div class="media">
                                            
                                                <div class="media-body text-white">
                                                
                                                    <h3 class="text-white">Student</h3>
                                                
                                               
                                                </div>
                                            </div>
                                    </div>
						        </div>
                                <div class="widget-stat card bg-danger">
							            <div class="card-body p-4">
                                            <div class="media">
                                            
                                                <div class="media-body text-white">
                                                
                                                    <h3 class="text-white">Unknown User</h3>
                                                
                                               
                                                </div>
                                            </div>
                                    </div>
						        </div>
                                    </div>

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
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/'); ?>vendor/global/global.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/custom.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/deznav-init.js"></script>
    <!-- Apex Chart -->



    <!-- Dashboard 1 -->
    <script src="<?php echo base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/dashboard/dashboard-1.js"></script>
    <script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/papaparse.min.js"></script>







    <script defer src="<?php echo base_url('assets/'); ?>js/face-api.min.js"></script>
    <!-- <script type="module" defer src="<?php echo base_url('assets/'); ?>js/webcam.min.js"></script> -->
    <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
    <script type="module" defer src="<?php echo base_url('assets/'); ?>js/modules.js"></script>
    <script type="module" defer src="<?php echo base_url('assets/'); ?>js/app.js"></script>

</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 04:43:09 GMT -->

</html>