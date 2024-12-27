<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeTrack Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        /* Background Overlay */
        .background-overlay img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(60%);
        }

        /* Header Navigasi */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: right;
            padding: 25px 50px;
            color: white;
            position: relative;
            z-index: 10;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 40px;
            margin: 0 auto;
        }

        nav ul li {
            position: relative; 
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* Dropdown Menu */
        nav ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
            list-style: none;
            padding: 10px 0;
            display: none;
            border-radius: 5px;
        }

        nav ul li ul li {
            padding: 10px 20px;
        }

        nav ul li ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li:hover ul {
            display: block;
        }

        .btn-login {
            background-color: #ff7f50;
            border: #0088ff;
            padding: 7px 25px;
            color: white;
            border-radius: 100px;
            font-size: 17px;
        }

        /* Konten Utama */
        .content {
            position: relative;
            text-align: left;
            padding: 0 50px;
            top: 15%;
            z-index: 5;
            color: white;
        }

        .content h1 {
            font-size: 64px;
            line-height: 1.2;
        }

        .content .trade {
            font-weight: bold;
        }

        .content .admin {
            font-weight: bold;
            color: #ff7f50;
        }

        .content p {
            margin: 30px 0;
            font-size: 18px;
        }

        .btn-start {
            background-color: #0088ff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 100px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        /* Galeri */
        .gallery {
            position: absolute;
            bottom: 20%;
            display: flex;
            justify-content: right;
            gap: 30px;
            width: 100%;
            padding-right: 30px;
        }

        .gallery img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Background Overlay -->
        <div class="background-overlay">
            <img src="images/landpg.png" alt="background">
        </div>

        <!-- Header Navigasi -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li>
                    <a href="#">Menu &#x25BC;</a>
                    <ul>
                        <li><a href="profile.php">Profil</a></li>
                        <li><a href="bantuan.php">Bantuan</a></li>
                    </ul>
                </li>
            </ul>
            <button onclick="window.location.href='login.php'" class="btn-login">Login</button>
        </nav>

        <!-- Konten Utama -->
        <div class="content">
            <h1>
                <span class="trade">TRADETRACK</span> <br>
                <span class="admin">ADMIN</span>
            </h1>
            <p>Aplikasi Tracking Data Penjualan</p>
            <button class="btn-start" onclick="window.location.href='login.php'">Let's Start <span>&#x27A4;</span></button>
        </div>

        <!-- Gambar Galeri -->
        <div class="gallery">
            <img src="images/image 1.png" alt="gallery1">
            <img src="images/image 2.png" alt="gallery2">
            <img src="images/image 3.png" alt="gallery3">
        </div>
    </div>
</body>
</html>
