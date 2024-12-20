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

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      .body1 {
          font-family: "Poppins", sans-serif;
      }

.body1 {
   
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container1 {
    max-width: 800px;
    width: 90%;
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.header1 .h11 {
    font-size: 2.5em;
    font-weight: bold;
    color: #4a90e2;
}

.subtitle {
    color: #777;
    font-size: 1.2em;
    margin-bottom: 30px;
}

.section1 {
    margin: 30px 0;
    padding: 20px;
    border-radius: 10px;
    background-color: #e9f3ff;
}

.visi {
    background-color: #cfe9ff;
    
}

.misi {
    background-color: #d7eaff;
}

.h21 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 15px;
    font-weight: bold;
}

.p, .ul1 {
    font-size: 1.1em;
    color: #555;
}

.ul1 {
    list-style-type: none;
    padding-left: 0;
    margin-top: 10px;
}

.ul1 .li1 {
    background-color: #f7f9fc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    color: #333;
    display: flex;
    align-items: center;
}

.ul1 .li1::before {
    content: '✓';
    color: #4a90e2;
    font-weight: bold;
    margin-right: 10px;
}
.navbar-nav {
  width: 100%; /* Memastikan navbar-nav mengambil seluruh lebar */
  text-align: start; /* Memusatkan teks */
}


    </style>
  </head>
  <body class="body1" style="background-color: #defcf9;">

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
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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

        <!-- resources/views/visi-misi.blade.php -->
        <br><br>
        <div class="container1" data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back"
                                data-aos-delay="300"
                                data-aos-offset="0"> <br><br><br><br>
        <header class="header1">
            <h1 class="h11">Visi dan Misi</h1>
            <p class="p subtitle">Menjadi Sekolah Dasar terdepan dalam inovasi dan keberlanjutan</p>
        </header>
        
        <!-- Bagian Visi -->
        <section class="section1 visi">
            <h2 class="h21">Visi</h2>
            <p class="p">Menjadi Sekolah Dasar unggul yang membentuk generasi cerdas, berakhlak mulia, kreatif, dan peduli lingkungan.</p>
        </section>

        <!-- Bagian Misi -->
        <section class="section1 misi">
            <h2 class="h21">Misi</h2>
            <ul class="ul1">
                <li class="li1">Menyediakan lingkungan belajar yang kondusif dan aman bagi siswa untuk mengembangkan potensi akademik maupun karakter mereka.</li>
                <li class="li1">Menanamkan nilai-nilai moral dan etika, membentuk siswa yang berakhlak mulia, jujur, dan bertanggung jawab.</li>
                <li class="li1">Mendorong kreativitas dan inovasi dalam setiap aspek pembelajaran untuk mengembangkan keterampilan siswa dalam menghadapi tantangan masa depan.</li>
                <li class="li1">Melaksanakan kegiatan pembelajaran yang berfokus pada kemampuan dasar (literasi dan numerasi) secara optimal.</li>
                <li class="li1">Meningkatkan kepedulian siswa terhadap lingkungan melalui program edukasi yang berkelanjutan tentang kelestarian alam.</li>
            </ul>
        </section>
    </div>

        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>


  </body>
</html>
