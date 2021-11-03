<?php

require_once ("koneksi.php");

// status tidak error
$error = 0;

// validasi data input

if (isset ($post['id_paket']) ) $id_paket = $_POST['id_paket'];
else $error = 1; // status error

if (isset ($post['nama_paket']) ) $nama_paket = $_POST['nama_paket'];
else $error = 1; // status error

if (isset ($post['kota_wisata']) ) $kota_wisata = $_POST['kota_wisata'];
else $error = 1; // status error

if (isset ($post['destinasi']) ) $destinasi = $_POST['destinasi'];
else $error = 1; // status error

if (isset ($post['fasilitas']) ) $fasilitas = $_POST['fasilitas'];
else $error = 1; // status error

if (isset ($post['armada']) ) $armada = $_POST['armada'];
else $error = 1; // status error

if (isset ($post['harga']) ) $harga = $_POST['harga'];
else $error = 1; // status error



// mengatasi error pada input

if ( $error == 1 ) {
    echo "Terjadi Kesalahan Pada Input Data";
    exit();
}

// menyiapkan query MySql utk dieksekusi

$query = "
    INSERT INTO barang
    (id_paket, nama_paket, kota_wisata, destinasi, fasilitas, armada, harga)
    VALUES
    ('{$id_paket}', '{$nama_paket}','{$kota_wisata}', '{$destinasi}','{$fasilitas}','{$armada}','{$harga}');
";

// mengeksekusi MySql query
$insert = mysqli_query($mysqli, $query);

// menangani error pd saat koneksi ke mysql

if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href= 'index.php'>Back</a>";
}
else {
    header("Location: index.php");
}



// if (isset($_POST["submit"]) ) {
//     $id_barang = $_POST['id_barang'];
//     $nama_barang = $_POST['nama_barang'];
//     $jenis = $_POST['jenis'];
//     $satuan = $_POST['satuan'];
//     $stok = $_POST['stok'];
//     $distributor = $_POST['distributor'];
//     $ekspor = $_POST['ekspor'];

//     $ijinEdar = $_POST['ijinEdar'];
//     $ijinBpom = $_POST['ijinBpom'];

//     if ( $ekspor == "boleh" ) {
//         $eksporText = "Boleh diEkspor";
//     }
//     else {
//         $eksporText = "Tidak Boleh diEkspor";
//     }

//     if ( $ijinEdar == true ) {
//         $ijinEdarStatus = "Berijin Edar";
//     }
//     else {
//         $ijinEdarStatus = "Belum Berijin Edar";
//     }

//     if ( $ijinBpom == true ) {
//         $ijinBpomStatus = "Berijin BPOM";
//     }
//     else {
//         $ijinBpomStatus = "Belum Berijin BPOM";
//     }
// }




?>





<html>

    <head>

         <title>hasil form</title>

    </head>



    <body>

       <table class= "table" border="1">

                            <thead>

                                <tr>

                                <th scope= "col">#</th>
                                <th scope= "col">id_barang</th>
                                <th scope= "col">nama_barang</th>
                                <th scope= "col">jenis_barang</th>
                                <th scope= "col">satuan</th>
                                <th scope= "col">jumlah_stok</th>
                                                                        </th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                <th scope= "row">1</th>
                                <td>id_barang</td> 
                                <td>nama_barang</td>
                                <td>jenis_barang</td>
                                <td>satuan</td>
                                <td>jumlah_stok</td>
                                                                        </th>
                                </tr>

                            </tbody>

                        </table> 
            

            


    </body>

</html>