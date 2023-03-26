<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 19:50:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EGMS </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets//'); ?>images/favicon.png">
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
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <h1>EGMS</h1>
                                    </div>
                                    <h4 class="text-center mb-4">Change Your Password</h4>
                                    <form>
                                        <input type="hidden" id="emp_id" value="<?= $this->session->emp_id; ?>">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Current Password</strong></label>
                                            <input disabled type="text" name="" value="<?= $this->session->pass; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>New Password</strong></label>
                                            <input type="password" id="npass" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm New Password</strong></label>
                                            <input type="password" id="cnpass" class="form-control">
                                        </div>

                                        <div class="text-center">
                                            <button type="button" id="change_pass" class="btn btn-success btn-block">Change Password</button>
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

    <script src="<?php echo base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/dashboard/dashboard-1.js"></script>
    <script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/papaparse.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/styleSwitcher.js"></script>
    <script>
        $(document).ready(function() {
            let base_url = 'http://localhost/egms/';
            $('#change_pass').click(function() {
                let npass = $('#npass').val();
                let cnpass = $('#cnpass').val();
                let emp_id = $('#emp_id').val();
                if (npass != cnpass) {
                    Swal.fire({
                        title: `Passwords don't Match!!`,
                        icon: "error",
                        timer: 2000

                    })
                } else {
                    $.post(`${base_url}changepass`, {
                        emp_id: emp_id,
                        npass: npass
                    }, (res) => {
                        console.log(res);

                    })



                }
            })


        });
    </script>
</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 19:50:58 GMT -->

</html>