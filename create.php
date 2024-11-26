<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

if(!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}
    include('connect.php');
    
    if(isset($_GET['submit'])) {
        $id = '';
        $nama = $_GET['nama'];
        $pesan = $_GET['pesan'];
        $pos = $_GET['pos'];

    $query = mysqli_query($conn, "INSERT INTO pengaduan(id, nama_lengkap, pesan, kode_pos) VALUES ('$id', '$nama', '$pesan', '$pos')");

        if($query) {
            header('location: index.php');
        };
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGADUAN MASYARAKAT</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: serif;
        }

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        nav{
            width: 95%;
            height: auto;
            padding: 20px 30px;
            margin-top: 10px;
            border-radius: 10px;
            background-color: #000000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        nav h1{
            color: white;
            font-size: 2rem;
        }

        .navbar{
            gap: 30vw;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .navbar a{
            width: 15vw;
            padding: 10px 0;
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
            border: 2px solid white;
            border-radius: 30px;
        }

        form{
            margin-top: 3%;
            border: 2px solid black;
            border-radius: 30px;
            padding: 30px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form .lable{
            width: max-content;
            gap: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .container{
            gap: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .container input{
            font-size: 1rem;
        }

        .pesan{
            width: max-content;
            gap: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .pesan input{
            width: 25vw;
            height: 20vh;
            font-size: 1rem;
        }

        button{
            width: 20vw;
            padding: 10px 0;
            font-size: 1rem;
            font-weight: 600;
            border: 2px solid black;
            border-radius: 30px;
            background-color: transparent;
            cursor: pointer;
        }
    </style>

</head>
<body>

    <nav>
        <h1>PENGADUAN MASYARAKAT</h1>
        <div class="navbar">
            <a href="index.php">Report Saya</a>
            <a href="#">Log Out</a>
        </div>
    </nav>

    <form action="create.php" method="get">
        <div class="container">
            <div class="lable">
                <label for="">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="lable">
                <label for="">Kode Pos:</label>
                <input type="number" name="pos" id="pos">
            </div>
        </div>

        <div class="pesan">
            <label for="">Pesan:</label>
            <input type="teks" name="pesan" id="pesan">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>