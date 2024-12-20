<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png">
    <title>SDN 1 Banjaranyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
           
            background-color: #e0f7fa; /* Biru soft */
            margin: 0;
            padding: 20px;
        }
        .navbar-nav {
          width: 100%; /* Memastikan navbar-nav mengambil seluruh lebar */
          text-align: start; /* Memusatkan teks */
        }
                h1 {
            text-align: center;
            color:  #4a90e2;
            font-weight: bold; /* Warna gelap untuk judul */
        }

            .navbar-nav {
            width: 100%; /* Memastikan navbar-nav mengambil seluruh lebar */
            text-align: start; /* Memusatkan teks */
          }

          .nav-item {
            display: inline-block; /* Memastikan item ditampilkan secara horizontal */
          }

          .nav-link {
            color: black; /* Mengubah warna teks menjadi hitam */
          }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            
        }
        .card {
            background-color: #ffffff; /* Latar belakang putih untuk card */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Lebar card */
            overflow: hidden;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05); /* Efek hover */
        }
        .card img {
            width: 100%; /* Gambar memenuhi lebar card */
            height: 200px; /* Tinggi gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        }
        .card h2 {
            color: #4a90e2; /* Warna gelap untuk sub-judul */
            margin: 10px;
        }
        .card p {
            margin: 10px;
            line-height: 1.6;
        }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg shadow navbar-light bg-light fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="55" height="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/struktur">Struktur Kepengurusan</a></li>
            <li><a class="dropdown-item" href="/ekstra">Ekstrakurikuler</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="/visimisi">Visi & misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="/login">Berita</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<h1  data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">Ekstrakurikuler</h1>
<br><br>
<div class="container" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">
    <div class="card">
        <img src="img/pramuka.jpg" alt="Pramuka">
        <h2>Pramuka</h2>
        <p>Kegiatan belajar alam, keterampilan, dan kebersamaan.<br>Kegiatan rutin setiap Sabtu pukul 09.00 - 11.00 WIB.</p>
    </div>

    <div class="card">
        <img src="img/voley.jpg" alt="Voli">
        <h2>Voli</h2>
        <p>Mengembangkan keterampilan fisik dan kerjasama tim.<br>Latihan diadakan setiap Rabu pukul 15.00 - 17.00 WIB.</p>
    </div>

    <div class="card">
        <img src="img/sepakbola.jpg" alt="Sepak Bola">
        <h2>Sepak Bola</h2>
        <p>Meningkatkan kebugaran dan semangat sportivitas.<br>Pertemuan setiap Jumat pukul 16.00 - 18.00 WIB.</p>
    </div>
</div>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>


  </body>
</html>
