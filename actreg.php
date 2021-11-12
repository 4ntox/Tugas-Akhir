<?php
// panggil file koneksi php
require_once ("koneksi.php");

// status no error
$error=0;

// validasi inputan
if(isset($_POST['id_petugas'])) $id_petugas= $_POST['id_petugas'];
else $error=1;

if(isset($_POST['nama_petugas'])) $nama_petugas= $_POST['nama_petugas'];
else $error=1;

if(isset($_POST['email'])) $email= $_POST['email'];
else $error=1;

if(isset($_POST['user_login'])) $user_login= $_POST['user_login'];
else $error=1;

if(isset($_POST['password'])) $password= $_POST['password'];
else $error=1;

// penanganan error
if($error=1) {
    echo "<script>
            alert('terjadi kesalahan input data, ulangi lagi..!');
          </script>";
} else {
    $password= hash('sha256', $password);
}
var_dump ($password);
// menyiapkan query data admin
$queryadm= "INSERT INTO petugas
(id_petugas, nama_petugas, email, user_login, password)
VALUES 
('{$id_petugas}', '{$nama_petugas}', '{$email}', '{$user_login}', '{$password}')";

// mengeksekusi query
$insert=mysqli_query($mysqli,$queryadm);

// menangani error saat eksekusi query
if($insert==false) {
    echo "<script>
            alert('gagal menambah user baru!');
          </script>";
} else {
    header("location:../login/pages/forms/general.php");
}

?>