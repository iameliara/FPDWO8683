<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anggota Tim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: rgb(65, 110, 150);
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-details {
            flex: 1;
        }

        .profile-details h2 {
            margin: 0;
            font-size: 24px;
            color: rgb(28, 95, 153);
        }

        .profile-details p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rgb(28, 95, 153);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .back-button:hover {
            background-color: rgb(40, 120, 180);
        }
    </style>
</head>
<body>
    <header>
        <h1>Profil Anggota Tim</h1>
    </header>

    <div class="container">
        <!-- Profil Ammor -->
        <section class="profile">
            <img src="images/ammor2.jpg" alt="Ammorhita Azza N.E">
            <div class="profile-details">
                <h2>Ammorhita Azza N.E - 22082010082</h2>
                <p><strong>Peran:</strong> UI/UX Designer</p>
                <p>Berfokus pada pengembangan antarmuka yang mengutamakan kemudahan dan kenyamanan pengguna. Dengan pengalaman merancang prototipe interaktif, ia terus mencari cara inovatif untuk menciptakan desain yang tidak hanya menarik secara visual tetapi juga fungsional dan sesuai dengan kebutuhan pengguna.</p>
            </div>
        </section>

        <hr>

        <!-- Profil Amelia -->
        <section class="profile">
            <img src="images/amel1.png" alt="Amelia Rizki Andini">
            <div class="profile-details">
                <h2>Amelia Rizki Andini - 22082010086</h2>
                <p><strong>Peran:</strong> Backend Developer</p>
                <p>Pengembang backend dengan keahlian dalam pengelolaan database. Dia memiliki pemahaman mendalam tentang teknologi server-side dan berkomitmen untuk memberikan solusi yang efisien dan skalabel.</p>
            </div>
        </section>

        <a href="index.php" class="back-button">back</a>
    </div>
</body>
</html>
