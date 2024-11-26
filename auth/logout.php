<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

session_unset();

session_destroy();

header('location: login.php');
exit;