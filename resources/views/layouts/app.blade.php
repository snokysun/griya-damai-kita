<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Griya Damai Kita</title>
    <style>
        body {
            font-family: "Times New Roman";
            font-size: 18px;
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .nav {
            font-family: "Arial", sans-serif;
            font-size: 18px;
            background: white;
            color: #0a2a63;
            padding: 5px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-left img {
            height: 60px;
            width: auto;
            padding: 0 20px;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-menu a {
            color: #0a2a63;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-button a {
            padding: 10px 50px;
            margin-left :auto;
            border: 2px solid #0a2a63;
            color: #0a2a63;
            border-radius: 999px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-button a:hover {
            background-color: #0a2a63;
            color: white;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }

        .container {
            padding: 0;
            max-width: 1000px;
            margin: auto;
        }

        footer {
            padding: 20px;
            background: #ffffff;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .page-title {
            font-family: "Arial", sans-serif;
            font-size: 48px;
            text-transform: uppercase;
        }

        .header {
            font-size: 32px;
        }

        .section-lightblue {
            background-color:rgb(217, 239, 255);
            padding: 5px 30px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.3), 5px 0 10px rgba(0, 0, 0, 0.3);
        }

        .section-white {
            background-color: #ffffff;
            padding: 5px 30px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.3), 5px 0 10px rgba(0, 0, 0, 0.3);
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 60px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="nav-left">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
            <div class="nav-menu">
                <a href="#home">Home</a>
                <a href="#cara-pemesanan">Cara Pemesanan</a>
                <a href="#contact">Kontak</a>
                <a href="#office">Office</a>
            </div>
        </div>
        <div class="nav-button">
            <a href="#contact">HUBUNGI KAMI</a>
        </div>
        <div class="whatsapp-widget">
            <a href="https://wa.me/6281398697123" class="whatsapp-float" target="_blank" title="Hubungi Kami via WhatsApp">
            <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp" />
            </a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>© {{ date('Y') }} Car Rental</footer>
</body>
</html>
