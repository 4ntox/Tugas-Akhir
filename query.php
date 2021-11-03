<?php

//mengkoneksi ke mysql
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




// foreach ( $result as $data) {

//         var_dump($data);
//         echo "<br>" ."<br>"."barang : " .$data['nama_barang'];
//     }
    

?>


