<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FIRMA - <?= $data['title']; ?></title>
  <link rel="icon" type="image/x-icon" href="<?= BASE_URL; ?>/resource/img/galanganicon.ico">

  <!-- Custom fonts for this template-->
  <link href="<?= BASE_URL; ?>/resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
  <!-- Custom styles for this template-->
  <link href="<?= BASE_URL; ?>/resource/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Date picker -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>/resource/datepicker/css/datepicker.min.css">
  <link rel="stylesheet" href="<?= BASE_URL; ?>/resource/datepicker/css/datepicker.css">

  <!-- css untuk select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-1">Selamat Datang</h1>
                    <p><small>Administrasi Akademik Fakultas Ilmu Komputer - UB</small></p>
                  </div>
                  <?php
                    Flasher::Message();
                  ?>
                  <form action="<?= BASE_URL; ?>/login/prosesLogin" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

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
      autoclose: true
    });
  </script>
  <script type="application/javascript">
    $('#inputGroupFile02').change(function (event) {
      var fileName = event.target.files[0].name;
      if (event.target.nextElementSibling != null) {
        event.target.nextElementSibling.innerText = fileName;
      }
    });
  </script>

  <!-- js untuk select2  -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.js-example-basic-single').select2();
    });
  </script>

</body>

</html>