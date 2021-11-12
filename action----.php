<?php

// panggil file koneksi php
    require_once ("koneksi.php");


//mengeksekui query
$query = "SELECT * FROM `paket`";
$result = mysqli_query ($mysqli, $query);

//get data id paket
$queryId = "SELECT * FROM `id_paket`";
$dataId = mysqli_query($mysqli, $queryId);

//get data nama paket
$queryNama = "SELECT * FROM `nama_paket`";
$dataNama = mysqli_query($mysqli, $queryNama);

//get data kota wisata
$queryKota = "SELECT * FROM `kota_wisata`";
$dataKota = mysqli_query($mysqli, $queryKota);

//get data destinasi
$queryDestinasi = "SELECT * FROM `destinasi`";
$dataDestinasi = mysqli_query($mysqli, $queryDestinasi);

//get data fasilitas
$queryFasilitas = "SELECT * FROM `fasilitas`";
$dataFasilitas = mysqli_query($mysqli, $queryFasilitas);

//get data armada
$queryArmada = "SELECT * FROM `armada`";
$dataArmada = mysqli_query($mysqli, $queryArmada);

//get data haarga
$queryHarga = "SELECT * FROM `harga`";
$dataHarga = mysqli_query($mysqli, $queryHarga);



    // // status no error
    // $error=0;

    // // memvalidasi inputan
    // if (isset($_POST['email']))
    //     $email=$_POST['email'];

    // else $error=1; // status error

    // if (isset($_POST['password']))
    //     $password=$_POST['password'];

    // else $error=1; // status error

    // // mengatasi jika terdapat error pada inputan
    // if ($error==1) {
    //     echo "Terjadi kesalahan pada data inputan <a href='login.php'>Kembali</a>";
    //     exit();
    // }


    // // hashing password
    // $password = hash("sha256", $password);

    // // menyiapkan query MySql utk dieksekusi
    // $query = "SELECT * FROM petugas WHERE email = '{$email}'";

    // // mengeksekusi My Sql query
    // $hasil = mysqli_query ($mysqli, $query);

    // $data = mysqli_fetch_assoc ($hasil);

    // if ( is_null($data) ) {
    //     echo "Email belum terdaftar <a href='login.php'>Kembali</a>";
    //     exit();
    // }

    // elseif ($data['password'] != $password) {
    //     echo "Password salah <a href='login.php'>Kembali</a>";
    //     exit();
    // }

    // else {
        
    //     //memulai fungsi session (session hanya dapat digunakan setelah fungsi ini)
    //     session_start();

    //     $_SESSION["status"] = true;
    //     $_SESSION["name"] = $data ["name"];
    //     $_SESSION["email"] = $data ["email"];
        
    //     header("location: index.php");

    // }


    // //


?>