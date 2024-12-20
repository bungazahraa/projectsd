<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png">
    <title>SDN 1 Banjaranyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style> 

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        font-family: "Poppins", sans-serif;
        background-color: #e0f7fa;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* public/css/style.css */


.container {
    display: flex;
    flex-direction: column;
    gap: 20px; /* Jarak antara navbar dan konten */
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

.org-chart {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.node {
    background-color: #3675dc;
    color: white;
    padding: 20px;
    margin: 10px;
    border-radius: 8px;
    transition: transform 0.3s, background-color 0.3s;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

.node:hover {
    transform: scale(1.05);
    background-color:  #3675dc;
}

.head {
    font-weight: bold;
    font-size: 1.2em;
}

.line {
    width: 2px;
    height: 30px;
    background-color: #333;
    margin: 0 auto; /* Center garis */
}

.horizontal {
    width: 100%; /* Lebar garis horizontal */
    height: 2px; /* Tinggi garis horizontal */
    background-color: #333;
    margin: 0; /* Menghilangkan margin untuk garis horizontal */
}

.teachers {
    display: flex;
    justify-content: center; /* Center semua node guru kelas */
    flex-wrap: nowrap; /* Agar guru kelas berada dalam satu baris */
    position: relative; /* Mengatur posisi relatif untuk garis */
}

.teachers .node {
    margin: 5px; /* Margin antara node guru kelas */
}

.navbar-nav {
  width: 100%; /* Memastikan navbar-nav mengambil seluruh lebar */
  text-align: start; /* Memusatkan teks */
}

    </style>
  </head>
  <body style="background-color:  #e0f7fa;">

  <nav class="navbar navbar-expand-lg shadow navbar-light bg-light fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="55" height="55"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ">
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
<div class="container py-5"data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">
        <h1 class="fw-bold" style="color:#3675dc;">Struktur Kepengurusan Guru SD</h1>
        <div class="org-chart">
            <div class="node head">
                <h2>Kepala Sekolah</h2>
                <p>Bpk. Gatau </p>
            </div>
            <div class="line"></div>
            <div class="node">
                <h2>Wakil Kepala Sekolah</h2>
                <p>Bpk. Gatau</p>
            </div>
            <div class="line"></div>
            <div class="teachers">
                <div class="node">
                    <h2>Guru Kelas 1</h2>
                    <p>Ibu Gatau</p>
                </div>
                <div class="line horizontal"></div>
                <div class="node">
                    <h2>Guru Kelas 2</h2>
                    <p>Ibu Gatau</p>
                </div>
                <div class="line horizontal"></div>
                <div class="node">
                    <h2>Guru Kelas 3</h2>
                    <p>Ibu Gatau</p>
                </div>
                <div class="line horizontal"></div>
                <div class="node">
                    <h2>Guru Kelas 4</h2>
                    <p>Bpk Gatau</p>
                </div>
                <div class="line horizontal"></div>
                <div class="node">
                    <h2>Guru Kelas 5</h2>
                    <p>Bpk Gatau</p>
                </div>
                <div class="line horizontal"></div>
                <div class="node">
                    <h2>Guru Kelas 6</h2>
                    <p>Ibu Gatau</p>
                </div>
            </div>
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
