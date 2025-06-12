<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Griya Damai Kita - Rental Mobil Terpercaya Jakarta | Sewa Mobil Murah')</title>
    <meta name="description" content="@yield('description', 'Rental mobil terpercaya di Jakarta dengan harga terjangkau. Melayani rental harian, mingguan, dan bulanan dengan driver berpengalaman. Hubungi kami sekarang!')">
    <meta name="keywords" content="@yield('keywords', 'rental mobil jakarta, sewa mobil murah, rental car jakarta, mobil rental harian, sewa mobil bulanan, rental mobil dengan driver')">
    <meta name="author" content="Griya Damai Kita">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Griya Damai Kita - Rental Mobil Terpercaya Jakarta')">
    <meta property="og:description" content="@yield('og_description', 'Rental mobil terpercaya di Jakarta dengan harga terjangkau dan pelayanan terbaik')">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Griya Damai Kita">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Griya Damai Kita - Rental Mobil Terpercaya Jakarta')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Rental mobil terpercaya di Jakarta dengan harga terjangkau dan pelayanan terbaik')">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
       
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CarRental",
        "name": "Griya Damai Kita",
        "description": "Rental mobil terpercaya di Jakarta dengan harga terjangkau dan pelayanan terbaik",
        "url": "{{ config('app.url') }}",
        "telephone": "+6281398697123",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Jakarta",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-6.2088",
            "longitude": "106.8456"
        },
        "openingHours": "Mo-Su 24:00",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Layanan Rental Mobil",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Rental Mobil Harian"
                    }
                },
                {
                    "@type": "Offer", 
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Rental Mobil dengan Driver"
                    }
                }
            ]
        }
    }
    </script>

    <style>
        body {
            font-family: "Times New Roman", serif;
            font-size: 18px;
            background-size: cover;
            margin: 0;
            padding: 0;
            line-height: 1.6;
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
            alt: "Logo Griya Damai Kita - Rental Mobil Terpercaya";
        }

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-menu a {
            color: #0a2a63;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #1a4a93;
            text-decoration: underline;
        }

        .nav-button {
            margin-left: auto;
        }

        .nav-button a {
            padding: 10px 50px;
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
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
            alt: "WhatsApp Icon - Hubungi Griya Damai Kita";
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
            margin-top: 40px;
        }

        .page-title {
            font-family: "Arial", sans-serif;
            font-size: 48px;
            text-transform: uppercase;
            margin: 0;
            padding: 20px 0;
        }

        .header {
            font-size: 32px;
            margin: 20px 0;
        }

        .section {
            padding: 20px 30px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.3), 5px 0 10px rgba(0, 0, 0, 0.3);
            margin: 20px 0;
        }
        .section-white { background-color: #fff; }
        
        .section-lightblue { background-color: rgb(217, 239, 255); }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 60px;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                padding: 10px 20px;
            }
            
            .nav-left {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }
            
            .nav-button {
                margin: 10px 0 0 0;
            }
            
            .nav-button a {
                padding: 8px 20px;
                font-size: 16px;
            }
            
            .page-title {
                font-size: 32px;
            }
            
            .header {
                font-size: 24px;
            }
            
            .section-lightblue,
            .section-white {
                padding: 15px 20px;
                margin: 15px 0;
            }
        }

        /* Skip to main content for accessibility */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 6px;
            background: #0a2a63;
            color: white;
            padding: 8px;
            text-decoration: none;
            z-index: 1000;
        }

        .skip-link:focus {
            top: 6px;
        }
    </style>
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <nav class="nav" role="navigation" aria-label="Main navigation">
        <div class="nav-left">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo Griya Damai Kita - Rental Mobil Terpercaya Jakarta" loading="lazy">
            <div class="nav-menu">
                <a href="#home" aria-label="Halaman Utama">Home</a>
                <a href="#cara-pemesanan" aria-label="Cara Pemesanan Rental Mobil">Cara Pemesanan</a>
                <a href="#contact" aria-label="Kontak Griya Damai Kita">Kontak</a>
                <a href="#office" aria-label="Lokasi Office Kami">Office</a>
                <a href="#galery" aria-label="Galeri">Galery</a>
            </div>
        </div>
        <div class="nav-button">
            <a href="#contact" aria-label="Hubungi Kami untuk Rental Mobil">HUBUNGI KAMI</a>
        </div>
    </nav>

    <!-- WhatsApp floating button -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/6281398697123?text=Halo,%20saya%20ingin%20bertanya%20tentang%20rental%20mobil" 
           class="whatsapp-float" 
           target="_blank" 
           rel="noopener noreferrer"
           title="Hubungi Kami via WhatsApp untuk Rental Mobil"
           aria-label="Chat WhatsApp untuk informasi rental mobil">
            <img src="{{ asset('images/whatsapp-icon.png') }}" 
                 loading="lazy" />
        </a>
    </div>

    <main id="main-content" class="container" role="main">
        @yield('content')
    </main>

    <footer role="contentinfo">
        <p>&copy; {{ date('Y') }} Griya Damai Kita - Rental Mobil Terpercaya. All rights reserved.</p>
        <p>Layanan rental mobil terbaik di Jakarta dengan harga kompetitif</p>
    </footer>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PK0SXP8M3X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PK0SXP8M3X');
    </script>
</body>
</html>