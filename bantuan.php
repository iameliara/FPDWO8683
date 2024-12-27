<?php
// Bagian untuk menangani pengiriman formulir (jika ada)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div style='padding: 20px; background-color: #d4edda; color: #155724; margin-bottom: 20px; border-radius: 5px;'>Terima kasih, $name! Pesan Anda telah terkirim.</div>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - Website Anda</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body dan font dasar */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header */
        header {
            background-color: rgb(88, 151, 193);
            color: white;
            padding: 20px 0;
        }

        header .logo h1 {
            text-align: center;
        }

        /* Tombol Kembali */
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

        .back-button svg {
            margin-right: 10px; 
            width: 355px;
            height: 20px;
        }

        /* Section Bantuan */
        .help-section {
            padding: 40px;
            background-color: white;
            max-width: 800px;
            margin: 30px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .help-section h2 {
            text-align: center;
            color: #2c3e50;
        }

        /* Formulir Kontak */
        form {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #2980b9;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: rgb(91, 153, 194);
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Pusat Bantuan</h1>
        </div>
    </header>
    
    <div class="container">
        <!-- Tombol Kembali -->
        <a href="index.php" class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </a>
    </div>

    <section class="help-section">
        <h2>Hubungi Kami</h2>
        <div class="contact-info">
            <p>Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi tim dukungan kami:</p>
            
            <ul>
                <li>Email: support@tradetack.com</li>
                <li>Telepon: +62 123 456 7890</li>
            </ul>
        </div>

        <h3>Formulir Kontak</h3>
        <form method="POST" action="">
            <label for="name">Nama Anda:</label>
            <input type="text" name="name" required>
            
            <label for="email">Email Anda:</label>
            <input type="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea name="message" required></textarea>
            
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Website Anda. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
