<!-- Footer -->
<footer class="sticky-footer bg-transparent">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Administrasi Akdemik Filkom UB 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Bootstrap core JavaScript-->
<script src="<?= BASE_URL;?>/resource/vendor/jquery/jquery.min.js"></script>
<script src="<?= BASE_URL;?>/resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= BASE_URL;?>/resource/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= BASE_URL;?>/resource/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= BASE_URL;?>/resource/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= BASE_URL;?>/resource/js/demo/chart-area-demo.js"></script>
<script src="<?= BASE_URL;?>/resource/js/demo/chart-pie-demo.js"></script>

<!-- bootstrap datepicker -->
<script src="<?= BASE_URL;?>/resource/datepicker/js/bootstrap-datepicker.js"></script>
<script>
  //Date picker
  $('#datepicker-year').datepicker({
		format: "yyyy",
		orientation: "top auto",
    viewMode: "years", 
    minViewMode: "years",
    autoclose: true
  });
</script>
<script>
    $('#tanggal').datepicker({
		format: 'yyyy-mm-dd',
		daysOfWeekDisabled: "0",
		autoclose:true
    });
</script>
<script type="application/javascript">
    $('#inputGroupFile02').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
</script>

<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
        </script>

</body>

</html>