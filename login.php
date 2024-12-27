<?php
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user'] = $username;
        header('Location: home.php');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TradeTrack Admin</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Kontainer Utama */
        .container {
            display: flex;
            height: 100vh;
        }

        /* Bagian Kiri (Logo & Nama) */
        .left-section {
            width: 50%;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .logo img {
            width: 350PX; 
        }

        .app-name {
            font-size: 36px;
            color:rgb(11, 99, 112);
            text-align: center;
            margin-bottom: 50px; 
        }

        .app-name span {
            font-weight: bolder;
            font-size: 60px;
            color: #0c5c6e;
        }

        /* Bagian Kanan (Login) */
        .right-section {
            width: 70%;
            background-color: #58a6b9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 425px;
            height: 500px;
            text-align: center;
        }

        h2 {
            color: #0c5c6e;
            margin-bottom: 10px;
            font-size: 28px;
        }

        p {
            color: #888888;
            line-height: 2;
            margin-bottom: 40px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 35px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        .input-group .icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888888;
            font-size: 18px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .remember-me label {
            margin-left: 5px;
            color: #555;
        }

        .btn-login {
            background-color: #0c5c6e;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 35px;
        }

        .btn-login:hover {
            background-color: #0a4d5d;
        }

        .separator {
            margin: 10px 0;
            position: relative;
        }

        .separator span {
            background-color: #fff;
            padding: 0 10px;
            color: #aaa;
            position: relative;
        }

        .separator::before,
        .separator::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background-color: #ddd;
        }

        .separator::before {
            left: 0;
        }

        .separator::after {
            right: 0;
        }

        /* Social Login */
        .social-login img {
            width: 40px;
            margin: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bagian Kiri (Logo dan Nama Aplikasi) -->
        <div class="left-section">
            <div class="logo">
                <img src="images/logo.png" alt="TradeTrack Logo">
            </div>
            <h1 class="app-name">TRADETRACK <br> <span>ADMIN</span></h1>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="right-section">
            <div class="login-box">
                <h2>Sign In.</h2>
                <p>Anda masuk sebagai Admin</p>
                <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
                <form method="POST" action="">
                    <div class="input-group">
                        <input type="text" name="username" placeholder="Username" required>
                        <span class="icon">@</span>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                        <span class="icon">🔒</span>
                    </div>
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <button type="submit" name="submit"


                    class="btn-login">Sign In</button>
                </form>
                <div class="separator">
                    <span>OR</span>
                </div>
                <div class="social-login">
                    <img src="images/google.png" alt="Google">
                    <img src="images/apple.png" alt="Apple">
                    <img src="images/facebook.png" alt="Facebook">
                </div>
            </div>
        </div>
    </div>
</body>
</html>

