<?php
// konek ke mysql
require_once ("koneksi.php");

// proses simpan inputan armada
if (isset($_POST['proses'])) {
    mysqli_query($mysqli,"INSERT INTO armada set
    id_armada = '$_POST[id]',
    armada = '$_POST[nama_armada]'");

    echo "Data armada berhasil disimpan";
}

// ----- proses simpan inputan paket wisata ----- //
// cek tombol simpen diklik atau belum
if (isset($_POST['simpen'])) {
    // ambil data dari setiap elemen yg diinput
    $id_paket = $_POST["id_paket"];
    $nama_paket = $_POST["nama_paket"];
    $kota_wisata = $_POST["kota_wisata"];
    $destinasi = $_POST["destinasi"];
    $fasilitas = $_POST["fasilitas"];
    $id_armada = $_POST["armada"];
    $harga = $_POST["harga"];
    $gambar = $_FILES["gambar"];

    // query utk insert data paket
    $query_paket = "INSERT INTO paket
                    VALUES 
                    ('$id_paket', '$nama_paket', '$kota_wisata', '$destinasi', '$fasilitas', '$id_armada', '$harga', '$gambar'
                    )";
    // eksekusi query paket
    mysqli_query($mysqli, $query_paket);

    var_dump($_POST);
    var_dump($_FILES);

    // cek apakah data berhasil ditambahkan atau tidak
    if(mysqli_affected_rows($mysqli)>0) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Gagal menambahkan data";
        echo "<br";
        echo mysqli_error($mysqli);
    }
    // var_dump($_POST);
    // echo "Berhasil simpan data paket wisata";
}

// -- Proses simpan inputan admin petugas
if (isset($_POST['register'])) {
  require_once("actreg.php");
    if($error == 0) {
      mysqli_query($mysqli,$insert);
        echo "<script>
                alert('berhasil menambah user baru!');
              </script>";
    } else {
        echo   "<script>
                  alert('gagal menambah user baru!');
                </script>";
    }
  }






?>

<!-- // -- Proses simpan inputan admin petugas
// if (isset($_POST['register'])) {
//   include_once("actreg.php");
//     if(registrasi($_POST)>0) {
//       echo "<script>
//               alert('berhasil menambah user baru!');
//             </script>";
//     } else {
//       echo   mysqli_error($mysqli);
//     }
//     mysqli_query($mysqli,"INSERT INTO petugas set
//     id_petugas = '$_POST[id_petugas]',
//     nama_petugas = '$_POST[nama_petugas]',
//     email = '$_POST[email]',
//     user_login = '$_POST[user_login]',
//     password = '$_POST[password]'");

//     var_dump($_POST);
//     echo "Data petugas berhasil disimpan";
// } -->

<!-- // mysqli_query($mysqli,"INSERT INTO paket set
    // id_paket = '$_POST[id_paket]',
    // nama_paket = '$_POST[nama_paket]',
    // kota_wiisata = '$_POST[kota_wisata]',
    // destinasi = '$_POST[destinasi]',
    // fasilitas = '$_POST[fasilitas]',
    // id_armada = '$_POST[armada]',
    // harga = '$_POST[harga]',
    // gambar = '$_FILE[gambar]'"); -->

<!-- <div class="input-group mb-3">
          <input type="password" name="repassword" class="form-control" placeholder="Ulangi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->