<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - TradeTrack</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: rgb(65, 110, 150);
            color: white;
            padding: 20px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .back-button {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            cursor: pointer;
            color: rgb(28, 95, 153);
            text-decoration: none;
            font-size: 18px;
        }

        .back-button span {
            margin-left: 10px;
        }

        .about-section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
        }

        .about-section img {
            flex: 1;
            max-width: 500px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-content {
            flex: 2;
        }

        .about-content h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: rgb(28, 95, 153);
        }

        .about-content p {
            margin-bottom: 15px;
        }

        .team-section {
            margin-top: 50px;
        }

        .team-section h2 {
            text-align: center;
            color: rgb(28, 95, 153);
            margin-bottom: 30px;
        }

        .team-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .team-member {
            text-align: center;
            max-width: 250px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .team-member img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .team-member h3 {
            margin: 10px 0 5px;
            color: #333;
        }

        .team-member p {
            font-size: 14px;
            color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        .back-icon {
            width: 24px;
            height: 24px;
            fill: rgb(28, 95, 153);
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
    </header>

    <div class="container">
        <!-- Tombol Kembali -->
        <a href="index.php" class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </a>

        <section class="about-section">
            <img src="images/logo.png" alt="Tentang Kami">
            <div class="about-content">
                <h2>TradeTrack: Solusi Pemantauan Penjualan</h2>
                <p>TradeTrack merupakan dashboard sederhana untuk membantu sebuah bisnis dalam memantau data penjualan secara efisien. Melalui akses langsung ke database, pengguna dapat memperoleh laporan penjualan secara real-time, sehingga memudahkan pengambilan keputusan yang didasarkan pada data aktual.</p>
                <p>Dengan teknologi OLAP (Online Analytical Processing) yang terintegrasi, TradeTrack memungkinkan analisis data secara mendalam melalui pendekatan multidimensional. Fitur ini membantu bisnis mengenali pola penjualan, menyusun strategi yang lebih tepat sasaran, serta meningkatkan efisiensi operasional secara keseluruhan.</p>
            </div>
        </section>

        <section class="team-section">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="images/ammor2.jpg" alt="Tim 1">
                    <h3>Ammorhita Azza N.E</h3>
                    <p>UI/UX Designer</p>
                </div>
                <div class="team-member">
                    <img src="images/amel1.png" alt="Tim 2">
                    <h3>Amelia Rizki Andini</h3>
                    <p>Backend Developer</p>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 TradeTrack. All rights reserved.</p>
    </footer>
</body>
</html>
