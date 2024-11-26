<?php

include('function.php');

if(isset($_POST['register'])) {
    register($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: serif;
        }

        body{
            padding: 20px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1{
            width: 100%;
            height: auto;
            padding: 20px 0;
            border-radius: 15px;
            background-color: black;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            font-size: 2rem;
        }

        form{
            width: 100%;
            height: auto;
            margin-top: 5vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form ul{
            padding: 50px 100px;
            box-shadow: 0px 0px 10px 3px black;
            border-radius: 20px;
            width: max-content;
            height: max-content;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h2{
            color: black;
            text-align: center;
            text-decoration: none;
            font-weight: 800;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        form ul .teksbox div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        form ul .teksbox div label{
            color: black;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        form ul .teksbox div input{
            width: 20vw;
            height: 6vh;
            padding: 0 10px;
            color: black;
            font-weight: 500;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .teksbox{
            margin-bottom: 20px;
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
            margin-bottom: 10px;
        }

        p a{
            color: black;
        }
    </style>

</head>
<body>
    <h1>PENGADUAN MASYARAKAT</h1>
    <form action="" method="post">
        <ul>
            <h2>SIGN IN</h2>
            <div class="teksbox">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div>
                    <label for="password">Pasword</label>
                    <input type="password" name="pw" id="pw" placeholder="Enter your password" required>
                </div>
                <div>
                    <label for="password">Confirm Pasword</label>
                    <input type="password" name="pw2" id="pw2" placeholder="Confirm password" required>
                </div>
            </div>
            <button type="submit" name="register">Sign In</button>
            <p>Already Have Account? <a href="login.php">Log In</a></p>
        </ul>
    </form>
</body>
</html>