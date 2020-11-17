<?php
 // Apabila user belum login
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<script>window.alert('Untuk mengakses modul, Anda harus login dulu.');
        window.location = 'index.php'</script>";  
}
// Apabila user sudah login dengan benar, maka terbentuklah session
else{
  $aksi = "modules/pendaftaran/aksi.php";

  // mengatasi variabel yang belum di definisikan (notice undefined index)
  $act = isset($_GET['act']) ? $_GET['act'] : '';

  switch($act){
    // Tampil User
    default:
    $query  = "SELECT * FROM peserta ORDER BY nama";
    $tampil = mysqli_query($connect, $query);
?>  
    <section class="content-header">
      <h1>
        Data Pesera
        <small>BIMAGO - Sumatera Barat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Peserta</li>
      </ol>
    </section>

    <section class="content">
      <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Jumlah Keseluruhan, <?php echo mysqli_num_rows($tampil); ?> Data</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
      
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="example1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nama Wali</th>
                  <th>Sekolah Asal</th> 
                  <th>No HP</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query  = "SELECT * FROM peserta ORDER BY nama";
                  $tampil = mysqli_query($connect, $query);
                  $no = 1;
                  while ($r=mysqli_fetch_array($tampil)){     
                ?>
                <tr>
                  <td><?php echo $no; ?></td>  
                  <td><?php echo $r['nama']?></td>        
                  <td><?php echo $r['nama_wali']?></td>
                  <td><?php echo $r['sekolah_asal']?></td>
                  <td><?php echo $r['no_hp']?></td>
                  <td>
                    <!-- <a href="#myModal" class="btn btn-warning btn-xs" id="custId" data-toggle="modal" data-id="<?php echo $r['member_id']?>"><i class="fa fa-eye"></i></a> -->
                    <a class="btn btn-success btn-xs" href="?module=pendaftaran&act=edit&id=<?php echo $r['id_peserta']; ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" <?php echo "href=\"$aksi?module=pendaftaran&act=delete&id=$r[id_peserta]\""; ?>><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <?php
      break;
    ?>

    <!-- Edit Pendaftaran -->
    <?php
    case "edit":
      
      $query = "SELECT * FROM peserta WHERE id_peserta='$_GET[id]'";
      $hasil = mysqli_query($connect, $query);
      $r     = mysqli_fetch_array($hasil);            
     
    ?> 
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Peserta</li>
          </ol>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning col-md-10">
                <div class="box-body">
                  <div class="row">
                    <div class="box-header">
                      <center><br>
                      <h3>
                        Edit Data <b>Peserta BIMAGO</b> <br>Sumatra Barat
                      </h3>
                      <br></center>
                    </div>
                    <!-- /.col -->
                  </div>
                  <form role="form" method="post" enctype="multipart/form-data" <?php echo "action=\"$aksi?module=pendaftaran&act=update\""; ?>>
                    
                    <input type="hidden" name="id" value="<?php echo $r['id_peserta']; ?>">

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $r['nama'] ?>" required>
                    </div>   
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control" id="date" name="tgl_lahir" placeholder="YYYY-MM-DD" type="text" value="<?php echo $r['tgl_lahir'] ?>" required/>
                      </div>
                      <!-- /.input group -->
                    </div> 
                    <div class="form-group">
                      <label class="control-label">Jenis Kelamin</label>
                      <?php
                        if ($r['gender']=='L') {
                        ?>
                        <select name="gender" class="form-control">
                          <option value="L" selected>Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                        <?php
                        }
                        else {
                          ?>
                        <select name="gender" class="form-control">
                          <option value="L">Laki-Laki</option>
                          <option value="P" selected>Perempuan</option>
                        </select>
                        <?php
                        }
                      ?>
                    </div>
                    <div class="form-group">
                      <label>Kontak</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" maxlength="13" onkeypress="return hanyaAngka(event)" value="<?php echo $r['no_hp'] ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Sekolah Asal</label>
                      <input type="text" class="form-control" name="asal" placeholder="Nama Sekolah" value="<?php echo $r['sekolah_asal'] ?>" required>
                    </div>  
                    <div class="form-group">
                      <label>Nama Wali</label>
                      <input type="text" class="form-control" name="nama_wali" placeholder="Nama Lengkap" value="<?php echo $r['nama_wali'] ?>" required>
                    </div>  
                    <div class="form-group">
                      <label for="judul">Alamat</label>
                      <textarea name="alamat" class="form-control" placeholder="Alamat tempat tinggal" required><?php echo $r['alamat'] ?>"</textarea>
                    </div>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-success" id="demo"> <i class="fa fa-save"></i> Simpan</button>
                      <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
                      <button type="button" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-times"></i> Batal</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>
        </section>
    <?php
    break;
  }
}
?>  
  
