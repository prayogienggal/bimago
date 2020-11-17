
<?php
require_once('config/db.php');
require_once "config/fungsi_antiinjection.php";
//$act = $_GET['act'];

 //upload
if (isset($_POST['upload'])){

  // attribut lainnya
  $nama      = anti_injection($_POST['nama']);
  $tgl_lahir = anti_injection($_POST['tgl_lahir']);
  $gender    = anti_injection($_POST['gender']);
  $no_hp     = anti_injection($_POST['no_hp']);
  $asal      = anti_injection($_POST['asal']);
  $nama_wali = anti_injection($_POST['nama_wali']);
  $alamat    = anti_injection($_POST['alamat']);
    
  $create = "INSERT INTO peserta (nama,tgl_lahir,gender,no_hp,sekolah_asal,nama_wali,alamat) 
             VALUES('$nama','$tgl_lahir','$gender','$no_hp','$asal','$nama_wali','$alamat')";
        
  $query = mysqli_query($connect,$create);

        echo "<script>alert('Data Berhasil Disimpan'); 
               window.location = 'index.php'</script>";

}

?>