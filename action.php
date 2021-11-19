<?php

// panggil file koneksi php
    require_once ("koneksi.php");
// mengaktifkan sesi
    // session_start();
// panggil file actreg
    // include ("actreg.php");

// proses login admin
if (isset($_POST["signin"])) {
    $user_login = $_POST["user_login"];
    $password = $_POST["password"];

    $result = mysqli_query($mysqli, "SELECT * FROM petugas WHERE user_login = '$user_login'");
    // var_dump ($result); die();

    // cek user login ada datanya atau tdk?? 
    if(mysqli_num_rows($result) > 0) {

        // include ("actreg.php");
        // jika ada cek passwordnya -- row adl variabel menampung data dr database di variabel result
        $row = mysqli_fetch_assoc($result);
        // var_dump ($row); die();
        $password= hash('sha256', $password);
        if($password===$row['password']) {
            header("location: ../forms/general.php");
            // echo "password salah..!!";
            exit;

        } else {
            header("location: ../examples/login.php");
        }
    }
    $error = true;

}



// // code login dr pak samsul
// session_start();
// if (isset($_POST['user']))
// {
//     include ("koneksi.php");
//     $user_name=htmlentities(trim($_POST['user']));
// 	$password=htmlentities(trim($_POST['passw']));

//     $sql = "select * from login where NIM='$user_name'";
// 	$qry = $conn->query($sql);
// 	$data = $qry->fetch_assoc();
// 	if ( ($qry->num_rows > 0))
// 	{
//         $_SESSION['id'] = $user_name;
// 		if(isset($_SESSION['id']))
// 			{
// 				echo "<script language=\"javascript\"> document.location.href='welcome.php'; </script>";
// 			} 
// 		echo "<script language=\"javascript\"> alert('Maaf, User dan Password Anda salah!!!'); </script>";
//         echo "<script language=\"javascript\"> document.location.href='login.php'; </script>";
// 	}

// }


?>

<!-- // code login dr pak samsul
session_start();
if (isset($_POST['user']))
{
    include ("koneksi.php");
    $user_name=htmlentities(trim($_POST['user']));
	$password=htmlentities(trim($_POST['passw']));

    $sql = "select * from login where NIM='$user_name'";
	$qry = $conn->query($sql);
	$data = $qry->fetch_assoc();
	if ( ($qry->num_rows > 0))
	{
        $_SESSION['id'] = $user_name;
		if(isset($_SESSION['id']))
			{
				echo "<script language=\"javascript\"> document.location.href='welcome.php'; </script>";
			} 
		echo "<script language=\"javascript\"> alert('Maaf, User dan Password Anda salah!!!'); </script>";
        echo "<script language=\"javascript\"> document.location.href='login.php'; </script>";
	}

} -->