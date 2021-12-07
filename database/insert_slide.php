<?php
    include "koneksi.php";

    // $sl = $_POST["slideku"];

    $nama_file = $_FILES["slideku"]["name"];
    $temp_file = $_FILES["slideku"]["tmp_name"];
    
    $dir = "assets/hasil_upload/$nama_file";
    move_uploaded_file($temp_file,$dir);

    // melakukan insert data ke dbase
    $sql = "INSERT INTO gambar(nama_gambar) VALUES('$nama_file')";
    $query = mysqli_query($mysqli1, $sql) or die (mysqli_error($mysqli1));

    if($query) {
        echo "upload sukses";
        "<script type='text/javascript'>alert('Berhasil nambah slide!')</script>
         <meta http-equiv='refresh' content='1; url=produk.php'>";
    }
        else {
            die (mysqli_error($mysqli1));
        }
		
?>