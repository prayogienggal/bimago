<?php
// Apabila user belum login
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo  "<script>window.alert('Untuk mengakses modul, Anda harus login dulu.');
        window.location = 'index.php'</script>";  
}
// Apabila user sudah login dengan benar, maka terbentuklah session

else{
  include "../config/db.php";

  // Home (Beranda)
  if ($_GET['module']=='dashboard'){               
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
      include "modules/beranda/beranda.php";
    }  
  }

  // Pendaftaran
  elseif ($_GET['module']=='pendaftaran'){
    if ($_SESSION['leveluser']=='admin'){
      include "modules/pendaftaran/index.php";
    }
  }

  // Manajemen User
  elseif ($_GET['module']=='user'){
    if ($_SESSION['leveluser']=='admin'){
      include "modules/user/user.php";
    }
  }

  // Apabila modul tidak ditemukan
  else{
    echo "<p>Modul tidak ada.</p>";
  }
}
?>
