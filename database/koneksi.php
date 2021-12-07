<?php


// Buat koneksi db tour_travel
$mysqli = new mysqli("jongkreatif.com", "u5250287_allsensesjourney", "allsensesjourney1234", "u5250287_allsensesjourney");

// Periksa Koneksi
if ($mysqli -> connect_errno) {
    echo "Gagal terhubung ke MySQL: " . $mysqli -> connect_error;
    exit();
}

?>