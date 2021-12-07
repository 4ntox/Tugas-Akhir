<?php
// konek ke mysql
require_once ("koneksi.php");

// ----- proses edit armada ----- //
// saat tombol updt diklik 
if (isset($_POST['updt'])) {

  $id_armada = $_POST["id"];
  $nama_armada = $_POST["nama_armada"];
  if($id_armada==null) {
     echo "<script>alert('id armada belum terisi, silahkan isi data armada');window.location='../login/pages/forms/general.php';</script>";
     return;
  }
  // jalankan query UPDATE utk merubah data armada ke database
  $queryarm = "UPDATE armada SET armada = '$nama_armada'
               WHERE id_armada = $id_armada";
  // eksekusi query armada
  $arm=mysqli_query($mysqli, $queryarm);

  // periksa query apkh ad error
  if($arm == false) {
    die("Query gagal dijalankan: ".mysqli_errno ($mysqli)."-".mysqli_error($mysqli)); 
  } else {
    // tampil alert dan akan redirect ke general.php
    echo "<script>alert('data berhasil dirubah.');window.location='../login/pages/forms/general.php';</script>";
  }


  }

// ----- proses simpan inputan paket wisata ----- //
// saat tombol update diklik 
if (isset($_POST['update'])) {

    // variable utk menampung data dari setiap elemen yg diedit
    $id_paket = $_POST["id_paket"];
    $nama_paket = $_POST["nama_paket"];
    $kota_wisata = $_POST["kota_wisata"];
    $destinasi = $_POST["destinasi"];
    $fasilitas = $_POST["fasilitas"];
    $id_armada = $_POST["armada"];
    $harga = $_POST["harga"];
    $gambar = $_FILES["gambar"]["name"];

    // var_dump($_POST); die();

    // cek dulu jika ada gambar diupload, run this code
    if($gambar != "") {
      $ekstensi_boleh = array ('png', 'jpg', 'jpeg'); // ekstensi gbr yg boleh diupload
      $x = explode ('.', $gambar); // memisahkan nama dg ekstensi yg diupload
      $ekstensi = strtolower (end($x)); // setelah dipisah, ekstensi dirubah huruf kcl

      // variable penampung gmbr smntra - temporer
      $temp_gbr = $_FILES["gambar"]["tmp_name"];
      // direktori utk menyimpan file upload
      $dir = "../img/uploaded/$gambar";
      if(in_array($ekstensi, $ekstensi_boleh) === true) {
        move_uploaded_file($temp_gbr, $dir); //memindahkan file ke direktori penyimpan
      
        // jalankan query UPDATE utk menambah data ke database
        $query_paket = "UPDATE paket SET 
        nama_paket = '$nama_paket', kota_wisata = '$kota_wisata', destinasi = '$destinasi', fasilitas = '$fasilitas', id_armada = '$id_armada', harga = '$harga', gambar = '$gambar'
        WHERE id_paket = $id_paket";
        // echo $query_paket;
        // die();
        // eksekusi query paket
        $a1=mysqli_query($mysqli, $query_paket);
        
        // periksa query apkh ad error
        if(!$a1) {
          die("Query gagal dijalankan: ".mysqli_errno ($mysqli)."-".mysqli_error($mysqli)); 
        } else {
          // tampil alert dan akan redirect ke general.php
          echo "<script>alert('data berhasil dirubah.');window.location='../login/pages/tables/table.php';</script>";
        }
      } else {
        // jika file ekstensi tidak sesuai yg dibolehin, tampil ini
        echo "<script>alert('format gambar adalah jpg,jpeg,png.');window.location='../login/pages/forms/form_edit.php?kode=".$id_paket."';</script>";
      }
    
  } else {
    // jalankan query UPDATE utk menambah data ke database tanpa gambar
    $query_paket = "UPDATE paket SET 
    nama_paket = '$nama_paket', kota_wisata = '$kota_wisata', destinasi = '$destinasi', fasilitas = '$fasilitas', id_armada = '$id_armada', harga = '$harga'
    WHERE id_paket = $id_paket";
    // echo $query_paket;
    // die();
    // eksekusi query paket
    $a1=mysqli_query($mysqli, $query_paket);
    
    // periksa query apkh ad error
    if(!$a1) {
      die("Query gagal dijalankan: ".mysqli_errno ($mysqli)."-".mysqli_error($mysqli)); 
    } else {
      // tampil alert dan akan redirect ke general.php
      echo "<script>alert('data berhasil dirubah.');window.location='../login/pages/forms/general.php';</script>";
    }
  } 


}
?>