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

        @media screen and (min-width: 767px) {
            .brand-desc {
                width: 50%;
                transform: translate(50%);
                left: -50%;
                text-align: center;
                word-spacing: 0.25rem
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
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/our-profile') }}">Our Profile</a>
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
            <h1 class="brand">TAYUMI Cake & Cookies</h1>
            <p class="brand-desc">
                Tayumi Cake & Cookies memiliki pertumbuhan dan perkembangan.
                Kami bekerja dengan tim yang solid dan tenaga kerja yang berdedikasi untuk pertumbuhan yang luar biasa.
                Dengan tenaga kerja yang berpengalaman, Tayumi Cake & Cookies telah diarahkan untuk memenuhi tuntutan
                kebutuhan
                Masyarakat dengan kualitas yang tinggi.
            </p>
        </section>

        <section id="gallery" class="container text-center my-4">
            <img src="{{ url('/img/product_hero.png') }}" alt="hero-img">
        </section>

        <div class="floating-contact">
            <a href="tel:+6281340734610">
                <img src="{{ url('/img/whatsapp_logo.png') }}" width="60" alt="wa">
            </a>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
