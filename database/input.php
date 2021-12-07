<?php

// konek ke mysql
require_once ("koneksi.php");

// proses simpan inputan armada
if (isset($_POST['proses'])) {
    mysqli_query($mysqli,"INSERT INTO armada set
    id_armada = '$_POST[id]',
    armada = '$_POST[nama_armada]'");

    echo "Data armada berhasil disimpan";
    header("location: ../login/pages/forms/general.php");
}

// ----- proses simpan inputan paket wisata ----- //
// cek tombol simpen diklik atau belum
if (isset($_POST['simpen'])) {
    // variable utk menampung data dari setiap elemen yg diinput
    $id_paket = $_POST["id_paket"];
    $nama_paket = $_POST["nama_paket"];
    $kota_wisata = $_POST["kota_wisata"];
    $destinasi = $_POST["destinasi"];
    $fasilitas = $_POST["fasilitas"];
    $id_armada = $_POST["armada"];
    $harga = $_POST["harga"];
    $gambar = $_FILES["gambar"]["name"];

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
      
        // jalankan query INSERT utk menambah data ke database
        $query_paket = "INSERT INTO paket VALUES 
        ('', '$nama_paket', '$kota_wisata', '$destinasi', '$fasilitas', '$id_armada', '$harga', '$gambar')";
        // echo $query_paket;
        // die();
        // eksekusi query paket
        $a1=mysqli_query($mysqli, $query_paket);
        
        // periksa query apkh ad error
        if(!$a1) {
          die("Query gagal dijalankan: ".mysqli_errno ($mysqli)."-".mysqli_error($mysqli)); 
        } else {
          // tampil alert dan akan redirect ke general.php
          echo "<script>alert('data berhasil ditambah.');window.location='../login/pages/forms/general.php';</script>";
        }
      } else {
        // jika file ekstensi tidak sesuai yg dibolehin, tampil ini
        echo "<script>alert('format gambar adalah jpg,jpeg,png.');window.location='../login/pages/forms/general.php';</script>";
      }
    
  } 
    
}

// -- Proses simpan inputan or registrasi admin petugas
if (isset($_POST['register'])) {
  require_once("actreg.php");
    if($error == 0) {
        echo "<script>
                alert('berhasil menambah user baru!');
              </script>";
    } else {
        echo   "<script>
                  alert('gagal menambah user baru!');
                </script>";
    }
}

// --- Proses simpan inputan seo

if (isset($_POST['klik'])) {

    $description = $_POST["description"];
    $keywords = $_POST["keywords"];
    $author = $_POST["author"];
    $robotsf = $_POST["robots_follow"];
    $robotsi = $_POST["robots_index"];
  // mengatasi erorr input
  if($error == true) { 
      echo "<script>
                alert('kesalahan input data seo!');
            </script>";
      exit();
  }

  $select = "SELECT * FROM seo";
  $query_seo = mysqli_query($mysqli, $select);
  $seo = mysqli_fetch_assoc($query_seo);

    if(!is_null($seo)) {
        $update = "UPDATE seo SET description = '{$description}', keywords = '{$keywords}', author = '{$author}', robots_follow = '{$robotsf}', robots_index = '{$robotsi}'";
        $seo1 = mysqli_query($mysqli, $update);
    } else {
        $sisip = "INSERT INTO seo VALUES ('$description', '$keywords', '$author', $robotsf, $robotsi)";
        $seo1 = mysqli_query($mysqli, $sisip);
    }

    // menangani erorr eksekusi query
    if($seo1 == false) {
        echo "<script>
                  alert('kesalahan dalam menambah data');
              </script>";
    } else {
        header("location: ../login/pages/forms/general.php");
    }
    
          
}





?>

