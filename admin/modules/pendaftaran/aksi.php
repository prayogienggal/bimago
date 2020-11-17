<?php
session_start(); 
// Apabila user belum login
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
    echo  "<script>window.alert('Untuk mengakses modul, Anda harus login dulu.');
        window.location = 'index.php'</script>";  
}
    // Apabila user sudah login dengan benar, maka terbentuklah session
else{
	require_once "../../../config/db.php";
	require_once "../../../config/fungsi_antiinjection.php";


    $module = $_GET['module'];
  	$act	= $_GET['act'];

	// Update
	if ($module=='pendaftaran' AND $act=='update'){
		$id 	   = $_POST['id'];
	  	$nama      = anti_injection($_POST['nama']);
	  	$tgl_lahir = anti_injection($_POST['tgl_lahir']);
	  	$gender    = anti_injection($_POST['gender']);
	  	$no_hp     = anti_injection($_POST['no_hp']);
	 	$asal      = anti_injection($_POST['asal']);
	  	$nama_wali = anti_injection($_POST['nama_wali']);
	  	$alamat    = anti_injection($_POST['alamat']);

		
		$update = "UPDATE peserta SET nama   		= '$nama',
			    					  tgl_lahir  	= '$tgl_lahir',
			    					  gender   		= '$gender',
		    					      no_hp   		= '$no_hp',
		    					      sekolah_asal  = '$asal',
		    					      nama_wali  	= '$nama_wali',
		    					      alamat  		= '$alamat',

			                         WHERE id_peserta = '$id'";
		mysqli_query($connect, $update);

		echo "<script>alert('Data Berhasil Di Update'); 
                window.location = '../../media.php?module=pendaftaran'</script>";

	}

	// Delete 
	elseif($module=='pendaftaran' AND $act=='delete'){
	    mysqli_query($connect, "DELETE FROM peserta WHERE id_peserta='$_GET[id]'");
    	header("location:../../media.php?module=".$module);
	}
}
?>