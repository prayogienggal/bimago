<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="small-box bg-green">
        <div class="inner">
          <?php 
            $query = "SELECT count(id_peserta) AS jumlah FROM peserta";
            $view  = mysqli_query($connect, $query);
            $r     = mysqli_fetch_array($view);
          ?>
          <center><p><h4>Jumlah Pendaftar</h4></p>
          <h3><?php echo $r['jumlah']; ?></h3></center>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">&nbsp;</a>
      </div>
    </div>
  </div>    
  
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Data Pendaftaran</h3>
    </div>
    <div class="box-body">
      <div class="table-responsive">
      <table class="table table-bordered table-hover" id="exampleData">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Instansi Asal</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            $query  = "SELECT * FROM peserta ORDER BY nama";
            $tampil = mysqli_query($connect, $query);
            while ($r=mysqli_fetch_array($tampil)){
          ?>
          <tr>
              <td> <?php echo $no; ?> </td>
              <td> <?php echo $r['nama']; ?> </td>
              <td> <?php echo $r['sekolah_asal']; ?> </td>
          </tr> 
          <?php 
              $no++;
            } 
          ?>          
        </tbody>
      </table>
    </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->