<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yesha</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            :root {
                --dark-pink: #82243c;
                --pink: #ed5379;
                --light-pink: #f57695;
                --off-black: #010101;
            }

            .text-dark-pink {
                color: var(--dark-pink);
            }

            .bg-dark-pink {
                background-color: var(--dark-pink) !important;
            }

            .text-pink {
                color: var(--pink);
            }

            .bg-pink {
                background-color: var(--pink);
            }

            .text-light-pink {
                color: var(--light-pink);
            }

            .bg-light-pink {
                background-color: var(--light-pink);
            }

            .text-off-black {
                color: var(--off-black);
            }

            .bg-off-black {
                background-color: var(--off-black);
            }
            
            body {
                background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("{{ asset('img/hero-1.jpg') }}");
                background-attachment: fixed;
                font-family: 'Poppins', sans-serif;
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                max-width: 600px;
                max-height: 400px;
            }
            .image-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 400px;
            }

            .gallery-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                max-width: 300px;
                max-height: 300px;
            }

            .gallery-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 300px;
            }

        </style>
    </head>
    <body class="antialiased">

        {{-- Header --}}
        <div class="navbar sticky-top bg-off-black">
            <header class="d-flex justify-content-center w-100 py-3">
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="#home" class="fw-bold text-white nav-link">Home</a></li>
                <li class="nav-item"><a href="#messages" class="fw-bold text-white nav-link">Messages</a></li>
                <li class="nav-item"><a href="#gallery" class="fw-bold text-white nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#games" class="fw-bold text-white nav-link">Games</a></li>
              </ul>
            </header>
        </div>
        
        {{-- Hero --}}
        <div id="home" class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mb-3">
                <div class="col-10 col-sm-8 col-lg-6">
                    {{-- <div class="container" style="max-height: 200px; max-width: 100px;">
                        <img src="{{ asset('img/img-main.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="hero-sub" loading="lazy">
                    </div> --}}
                    <img src="{{ asset('img/img-main.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="hero-sub" loading="lazy" width="275">
                </div>
               
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-light-pink">Hi, Cella!</h1>
                    <p class="lead text-white">Welcome to Cella's Website, your new one-stop solution for all of your needs (anjay). Pokonya semua hal yang cella suka ada di sini dan harapannya akan terus bertambah seiring berjalannya waktu.</p>
                    <audio controls class="w-50">
                        <source src="{{ asset('audio/tangled.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>

        {{-- CEO Message --}}
        <div id="messages" class="px-5 py-5 bg-light">
            <div class="container my-4">
                <div class="row">
                    <div class="col-10 col-sm-8 col-lg-6 image-container">
                        <img src="{{ asset('img/pikaw.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <h1 class="display-5 text-pink fw-bold lh-1 mb-3">CEO Message</h1>
                        <p class="lead">Halo, aku Pikaw, aku CEO dari website yang super duper spesial buat kak yesha ini. Semua ini dirancang dengan cinta, harapan, dan sedikit lelucon pikaw, agar setiap kali kak yesha lihat, kak yesha akan merasa bahagia dan dicintai, persis seperti yang pikaw dan bang enrile rasakan setiap hari bersama kak yesha.</p>
                        <p class="lead">Dengan cinta dan pelukan berbulu.</p>
                        <p class="lead">- Pikaw</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-5 py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-sm-8 col-lg-6" style="max-height: 200px">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-pink">COO Message</h1>
                        <p class="lead">Aku COO dari website yang keren banget ini. Di sini, aku bertugas menjaga bagian paling penting dalam hidup: tidur! Ya, pekerjaan utamaku adalah tidur, dan aku melakukannya dengan sangat baik. Selamat mengunjungi website ini dan jangan lupa istirahat ya kak yeshaa!</p>
                        <p class="lead">Salam, auuuuummmmmmmmmm</p>
                        <p class="lead">- Fika</p>

                    </div>
                    <div class="col-10 col-sm-8 col-lg-6 image-container">
                        <img src="{{ asset('img/fika.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <div class="px-5 py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-sm-8 col-lg-6 image-container">
                        <img src="{{ asset('img/ayen.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-pink">CTO Message</h1>
                        <p class="lead">Ayennnnnn, aku programmer dari website inii. Meskipun aku tidak punya tangan, kaki, dan tubuhku kecil, jangan remehkan aku yaaa. Aku in charge dalam semua pemrograman di sini (bukan bang enrile, bang enrile cupuuuu). Setiap kode yang kutulis adalah bentuk kasih sayang ayen untuk membuat website ini menjadi tempat yang nyaman dan menyenangkan bagi Kak Yesha.</p>
                        <p class="lead">Salam hangat tanpa tangan dan kaki, squeakkkk</p>
                        <p class="lead">- Ayen</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gallery --}}

        <div id="gallery" class="px-5 py-5 bg-light-pink" >
            <div class="container">
                <h1 class="text-center text-white fw-bold my-4">GALLERY</h1>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-1.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-2.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-3.jpg') }}" alt="" class="class-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-4.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-5.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-6.jpg') }}" alt="" class="class-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-7.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-8.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-9.jpg') }}" alt="" class="class-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-10.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-11.jpg') }}" alt="" class="class-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 my-4 text-center gallery-container">
                        <img src="{{ asset('img/img-12.jpg') }}" alt="" class="class-fluid">
                    </div>
                </div>
            </div>
        </div>

        {{-- Yesha's Favorite --}}
        <div id="games" class="px-5 py-5 bg-white">
            <div class="container my-5">
                <h1 class="text-center text-light-pink fw-bold my-4">YESHA'S FAVORITE</h1>
                
                <div class="row">
                    <div class="col text-center mb-5">
                        <h1 id="food" class="text-off-black fw-bold my-4">Your Favorite Food</h1>
                        <button onclick="generateFood()" type="button" class="btn btn-primary w-25">Click Here to Generate</button>
                    </div>
                </div>
                <p class="lead mt-4">Notes:</p>
                <p class="lead">Karena yesha suka susah untuk mencari makanan favorit, kami membuat generator yang dapat mencari makanan favorit yesha dari Yesha's Favorite</p>  
            </div>
        </div>

        {{-- Dates --}}
        <div class="px-5 py-5 bg-light-pink">
            <div class="container my-4">
                <div class="row">
                    <div class="col-10 col-sm-8 col-lg-6 image-container">
                        <img src="{{ asset('img/img-me.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <h1 class="display-5 text-white fw-bold lh-1 mb-3">Author Message</h1>
                        <p class="text-white">Halo, aku authornya. Ini bukan pikaw, fika, atau pun ayen. Ini Enrile secara fisik dan raga. Website ini dikerjain karena kangen sama cella dan gabisa berhenti mikirin cella. On a past few days, i manage to complete a few of my works, joki coding dan berhasil selesain beberapa project design, berhasil namatin game juga namanya world of goo 2, itu game udah lama banget tapi baru ada sequelnya setelah berpuluh-puluh tahun dan ketemu jokowi lagi tau AHAHAHA. Next work selesai compro mau coba apply lagi ke beberapa perusahaan karena udah alhamdulillah udah merasa lebih pede untuk apply sebagai fullstack developer lagi. Tapi, tetep aja it's hard, i want to share my happiness and what i achieved to u.</p>
                        <p class="text-white">Maaf kalau kemarin cella merasa sendirian, sama sekali gaada maksud buat cella ngerasa seperti itu karena memang cukup sulit buat proses masalah yg terjadi kemarin, tetapi rest assured, sekarang udah bisa manage dan hubungan The Enrile's juga mulai membaik termasuk mama juga sudah kembali seperti dulu. Akan selalu jujur kalau punya masalah and will always open to u. Pokonya cella ga akan ngerasa sendirian, i will always love u no matter what.</p>
                        <p class="text-white">I love you, cella.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="px-5 py-5 bg-off-black">
            <div class="container my-5">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="text-white">Would you go on a date with me?</h1>
                        <img src="{{ asset('img/date.jpg') }}" class="d-block mx-lg-auto img-fluid my-4" alt="Bootstrap Themes" loading="lazy">
                        <a href="mailto:enrilefadhli@gmail.com?subject=Date Email&body=Iyaaa" class="btn btn-primary">
                            Yes
                        </a>
                        <button id="dateRejected" onclick="changeNoButton()" type="button" class="btn btn-secondary">No</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script>
        function generateFood() {
            const food = ['Hijoo','Fan Fries','Sashimi','Mochi','Bebek 70','Sour Sally','Wingstop','Chuka Idako','Moreau Chocolatiers Cafe','Kebuli Gaza','Bebek Kaleyo','Roti O','Nasi Goreng Bang Ojan','Ayam Beska','Ayam Cindy','Mavera','Blenger Burger','Bittersweet'];
            const randomFood = food[Math.floor(Math.random() * food.length)];
            document.getElementById("food").textContent = randomFood;
        }
        function changeNoButton(){
            const reject = ['Gaboleh','Tidakk','Pilih yang kiri', 'Better yang kiri tau','Yang Kiri aja ya']
            const randomReject = reject[Math.floor(Math.random() * reject.length)];
            document.getElementById("dateRejected").textContent = randomReject;
        }
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</html>