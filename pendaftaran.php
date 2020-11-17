<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran | BIMAGO - Sumatra Barat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-1.x/skins/all.css?v=1.0.2">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b>BIMAGO</b> - Sumatra Barat</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="pendaftaran.php"><i class="fa fa-users"></i> Pendaftaran</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Log-In -->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="admin" class="dropdown-toggle" >
                <i class="glyphicon glyphicon-log-in"></i>
                <span class="label label-warning">Log-in</span>
              </a>
            </li>
            <!-- /.Log-In-menu -->
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Page</a></li>
            <li class="active">Pendaftaran</li>
          </ol>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- general form elements -->
          <div class="box col-lg-12">
            <div class="row">
              <div class="box-header">
                <img src="Logo-IKPM.jpg" width="100px">
                <center><br>
                <h3>
                  Form Pendaftaran <b>Peserta BIMAGO</b> <br>Sumatra Barat
                </h3>
                <br></center>
              </div>
              <!-- /.col -->
            </div>
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST" action="action.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                </div>   
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input class="form-control" id="date" name="tgl_lahir" placeholder="YYYY-MM-DD" type="text" required/>
                  </div>
                  <!-- /.input group -->
                </div> 
                <div class="form-group">
                  <label class="control-label">Jenis Kelamin</label>
                    <select name="gender" class="form-control" required>
                      <option>-- Please select --</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Kontak</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" maxlength="13" onkeypress="return hanyaAngka(event)" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Sekolah Asal</label>
                  <input type="text" class="form-control" name="asal" placeholder="Nama Sekolah" required>
                </div>  
                <div class="form-group">
                  <label>Nama Wali</label>
                  <input type="text" class="form-control" name="nama_wali" placeholder="Nama Lengkap" required>
                </div>  
                <div class="form-group">
                  <label for="judul">Alamat</label>
                  <textarea name="alamat" class="form-control" placeholder="Alamat tempat tinggal" required></textarea>
                </div>
                
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2020 <a href="#">BIMAGO SUMBAR </a>.</strong> All rights reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>

<!-- iCheck 1.0.1 -->
<script src="plugins/icheck-1.x/icheck.js?v=1.0.2"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<!-- Page script -->
<script type="text/javascript">
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  })
</script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_lahir"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</body>
</html>
