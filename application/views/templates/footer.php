<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <!--<div class="copyright">-->
    <!--    <p>Developed by ________ </p>-->
    <!--</div>-->

</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?php echo base_url('assets/'); ?>vendor/global/global.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/custom.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/deznav-init.js"></script>
<!-- Apex Chart -->

<!-- MOdals -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js" integrity="sha512-FEzFjtAJCunp3uJTwYfcHtJHlRbgkzRYNpvsShtjVu5jSoejpExyzHHSDOUJ46IgV7VoNAkuVxjbid5pkoLASg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.js" integrity="sha512-nAyaaTbZ7BpQ9HbWB6ZFPav14ekIZ/E1gHU8UC5q3FolFGzCPtFD0Er6VG5otVoWJtVGTenKUGufRjOkrLTyug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/moment.min.js" integrity="sha512-i2CVnAiguN6SnJ3d2ChOOddMWQyvgQTzm0qSgiKhOqBMGCx4fGU5BtzXEybnKatWPDkXPFyCI0lbG42BnVjr/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Dashboard 1 -->
<script src="<?php echo base_url('assets/'); ?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/dashboard/dashboard-1.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/jqueryButtons.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/jsZip.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/js/h5Buttons.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/papaparse.min.js"></script>

<!-- Chart ChartJS plugin files -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<?php if ($this->uri->segment(1) == 'dashboard') : ?>
	<script src="<?php echo base_url('assets/'); ?>js/chart.js"></script>
<?php endif; ?>
<?php if ($this->uri->segment(1) == 'accessibility') : ?>
	<script src="<?php echo base_url('assets/'); ?>js/acc.js"></script>
<?php endif; ?>

<?php if ($this->uri->segment(1) == 'empathy') : ?>
	<script src="<?php echo base_url('assets/'); ?>js/em.js"></script>
<?php endif; ?>

<?php if ($this->uri->segment(1) == 'responsetime') : ?>
	<script src="<?php echo base_url('assets/'); ?>js/res.js"></script>
<?php endif; ?>

<?php if ($this->uri->segment(1) == 'loyalprograms') : ?>
	<script src="<?php echo base_url('assets/'); ?>js/lp.js"></script>
<?php endif; ?>

<script src="<?php echo base_url('assets/'); ?>js/scripts.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/archive.js"></script>

<!--<script>-->
<!--    $(function() {-->
<!--      $('input[name="daterange"]').daterangepicker({-->
<!--        opens: 'left'-->
<!--      }, function(start, end, label) {-->
<!--          loadPie();-->
<!--        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));-->
<!--      });-->
<!--    });-->
<!--</script>-->


</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2021 03:33:32 GMT -->

</html>