<?php

session_start(); // -> Harus ditambahkan ketika menggunakan session

if(!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

include('connect.php');

if(isset($_POST['id']) && !empty($_POST['id'])) {
    // Tangkap id lalu taruh di variable
    $id = $_POST['id'];

    // Hapus data berdasarkan id
    $result = mysqli_query($conn, "DELETE FROM pengaduan WHERE id = $id");

    if($result) {
        echo "<script>
            alert ('Data Berhasil Di Hapus');
            window.location.replace('index.php');
        </script>";
    } else {
        echo "<script>
            alert ('Data Gagal Di Hapus');
            window.location.replace('index.php');
        </script>";
    }
}
?>