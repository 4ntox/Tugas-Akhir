<?php

// Buat koneksi db carousel
$mysqli1 = new mysqli("localhost", "root", "", "carousel");

// Periksa Koneksi
if ($mysqli1 -> connect_errno) {
    echo "Gagal terhubung ke MySQL carousel : " . $mysqli1 -> connect_error;
    exit();
}

// Buat koneksi db tour_travel
$mysqli = new mysqli("localhost", "root", "", "tour_travel");

// Periksa Koneksi
if ($mysqli -> connect_errno) {
    echo "Gagal terhubung ke MySQL: " . $mysqli -> connect_error;
    exit();
}

?>