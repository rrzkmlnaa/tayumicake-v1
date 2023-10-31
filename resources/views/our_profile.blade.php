<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tayumi Cake & Cookies</title>

    <style>
        .main {
            position: relative;
        }

        .brand {
            font-family: 'Kalam', cursive;
            text-align: center;
        }

        .brand-desc {
            width: 100%;
            text-align: justify;
            word-spacing: 0.25rem
        }

        .floating-contact {
            position: fixed;
            bottom: 15px;
            right: 15px;
        }

        .nav-link {
            font-family: 'Kalam', cursive;
            font-size: 22px
        }

        .active {
            color: white !important;
            background: rgb(111, 132, 224) !important;
            padding-left: 2rem !important;
            padding-right: 2rem !important;
            border-radius: 5px
        }

        .hero-desc {
            text-align: justify;
        }

        @media screen and (min-width: 767px) {
            .floating-contact {
                position: fixed;
                top: 15px;
                right: 15px;
            }

            .brand-desc {
                width: 50%;
                transform: translate(50%);
                left: -50%;
                text-align: center;
                word-spacing: 0.25rem
            }

            #hero img {
                width: 100vw !important
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand d-md-none" href="#">TAYUMI Cake & Cookies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/our-profile') }}">Our Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/product') }}">List Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="main">
        <section id="hero" class="container-fluid my-4">
            <img src="{{ url('/img/our_profile.png') }}" class="img-fluid" alt="profile">

            <div class="my-4">
                <p class="hero-desc">
                    Selamat datang di <b>TAYUMI Cake & Cookies</b> Kami adalah sebuah Usaha Mikro, Kecil, dan
                    Menengah (UMKM) yang berdedikasi untuk menyediakan produk berkualitas tinggi kepada
                    pelanggan kami. Dengan pengalaman dan dedikasi kami, kami telah menjadi salah satu pilihan
                    utama bagi pelanggan di bidang kuliner.
                </p>
                <p class="hero-desc">
                    Produk kami mencakup berbagai aneka ragam kue ulang tahun, donat, balo & brownis. Kami
                    menggunakan bahan-bahan berkualitas tinggi dan proses produksi yang cermat untuk
                    memastikan produk kami memenuhi standar kualitas yang tinggi. Dalam setiap langkah
                    produksi, kami memberikan perhatian terhadap detail dan menjaga konsistensi untuk
                    memastikan kepuasan pelanggan.
                </p>
            </div>
        </section>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
