<?php

require_once ("../../../database/koneksi.php");

// aksi hapus armada
$arm=[];
if(isset($_GET["kd"])) {
  
// var_dump($_GET["kd"]); die();
$sql6 = mysqli_query($mysqli, 'DELETE FROM armada WHERE id_armada = ' . $_GET['kd']);

// $arm = mysqli_fetch_assoc($sql6);
// var_dump($arm);die();
  if(!$sql6) {
    echo "<script language=\"javascript\"> alert('data gagal dihapus!!'); document.location='../tables/table.php'</script>";
    
  } else {
    echo "<script language=\"javascript\"> alert('data berhasil dihapus!!'); document.location='../tables/table.php'</script>";
    
  }

}


// aksi hapus paket
$arm=[];
if(isset($_GET["kode"])) {
  
// var_dump($_GET["kd"]); die();
$sql7 = mysqli_query($mysqli, 'DELETE FROM paket WHERE id_paket = ' . $_GET['kode']);

// $arm = mysqli_fetch_assoc($sql6);
// var_dump($arm);die();
  if(!$sql7) {
    echo "<script language=\"javascript\"> alert('data gagal dihapus!!'); document.location='../tables/table.php'</script>";
    
  } else {
    echo "<script language=\"javascript\"> alert('data berhasil dihapus!!'); document.location='../tables/table.php'</script>";
    
  }

}

// aksi hapus petugas
$arm=[];
if(isset($_GET["kda"])) {
  
// var_dump($_GET["kd"]); die();
$sql8 = mysqli_query($mysqli, 'DELETE FROM petugas WHERE id_petugas = ' . $_GET['kda']);

// $arm = mysqli_fetch_assoc($sql6);
// var_dump($arm);die();
  if(!$sql8) {
    echo "<script language=\"javascript\"> alert('data gagal dihapus!!'); document.location='../tables/table.php'</script>";
    
  } else {
    echo "<script language=\"javascript\"> alert('data berhasil dihapus!!'); document.location='../tables/table.php'</script>";
    
  }



}

?>
