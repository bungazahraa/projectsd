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

  <section id="hero">
        <div class="container text-center text-white">
          <div class="hero-title" data-aos="fade-up">
          <div class="hero-text">Selamat datang <br> di SDN 1 Banjaranyar</div>
          <h4>Sekolah Dasar yang memiliki kualitas pengajaran terbaik</h4>
          </div>
        </div>
      </section>


      <section id="progres" style="margin-top: -30px;">
        <div class="container col-xl-9">
          <div class="row">
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
              <div class="bg-white rounded-3 shadow p-3 mb-2 justify-content-between d-flex align-items-center">
              <div>
                <p>Pendidikan <br> Berkualitas</p>
              </div>
              <img src="img/bacabuku.png" height="70" width="70">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
              <div class="bg-white rounded-3 shadow p-3  mb-2 justify-content-between d-flex align-items-center">
              <div>
                <p>Pendidikan <br> Berakhlak</p>
              </div>
              <img src="img/sikap.png" height="70" width="70">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
              <div class="bg-white rounded-3 shadow p-3  mb-2 justify-content-between  d-flex align-items-center">
              <div>
                <p>Pendidikan <br> Kreatif</p>
              </div>
              <img src="img/kreatif.png" height="70" width="70">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col mb-2"data-aos="flip-left">
              <div class="bg-white rounded-3 shadow p-3  mb-2 justify-content-between d-flex align-items-center">
              <div>
                <p>Pendidikan Teknologi</p>
              </div>
              <img src="img/laptop.png" height="70" width="70">
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="berita">
        <div class="container-fluid shadow-md" style="background-color: #f8f8f8;">
        <div class="container py-5"><br>

            <div class="header-berita text-center" >
                <h2 class="fw-bold" id="h2w">Berita Kegiatan SD</h2>
            </div><br>

            <div class="row" data-aos="flip-up">

            @foreach (\App\Models\News::all() as $item)
                <div class="col">
                    <div class="card h-100" data-aos="fade-down">
                      <a href="{{ route('news.show', $item->id) }}" style="color: black; text-decoration:none;">
                    <img src="{{ asset('storage/' . $item->image_url) }}" class="card-img-top">
                    <div class="card-body">
                      <h3 class="card-title" style="font-weight: bold;"> {{ $item->title }} </h3>
                      <small style="color: grey;">{{ $item->created_at->format('j F Y')}} - dibuat oleh {{ $item->nama }} </small>
                      </a>
                </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>
    </section>


    <section id="join" class="py-5" data-aos="flip-down">
          <div class="container py-5">
            <div class="row d-flex align-items-center">
              <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>SDN 1 Banjaranyar</h5>
                  </div>
                  <h1 class="fw-bold mb-2" style="color:#0092ca;"> Gabung bersama kami, mewujudkan generasi hebat</h1>
                  <p class="mb-3">
                    SDN 1 Banjaranyar merupakan sekolah dasar terbaik di Jawa Tengah, Banyumas. Dengan meluluskan siswa/siswi tebaik.
                  </p>
              </div>
              <div class="col-lg-6">
                  <img src="img/join.png" class="img-fluid">
              </div>
            </div>
          </div>
      </section>

      <section id="video" class="py-5"  data-aos="zoom-in">
        <div class="container py-5">
          <div class="text-center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/m2iVEH3XCoQ?si=3__2LAXdECxv8rSD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </section>


      <section id="video_youtube" class="py-5"  data-aos="zoom-in">
        <div class="container py-5">
          <div  class="header-video text-center">
            <h2 class="fw-bold" style="color: #0092ca;">Video Kegiatan Sekolah Dasar</h2>
          </div>

          <div class="row py-4">
            <div class="col-lg-4">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/9bqLBI-o1ds?si=gcPsb_i25rqAKtXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/-Fve367yqWw?si=8Z3f279Rr3aiEg9y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/llrPnrVu9II?si=PPASjYBdUS6N60rA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
          </div>
        </div>
      </section>

      <section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
              <div class="stripe-putih me-2"></div>
              <h5 class="fw-bold text-white">Foto kegiatan</h5>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 cold-md-6 col-6">
              <img src="img/fk10.png" class="img-fluid">
            </div>
            <div class="col-lg-3 cold-md-6 col-6">
              <img src="img/fk11.png" class="img-fluid">
            </div>
            <div class="col-lg-3 cold-md-6 col-6">
              <img src="img/fk12.png" class="img-fluid">
            </div>
            <div class="col-lg-3 cold-md-6 col-6">
              <img src="img/fk13.png" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

      <section id="fasilitas" class="py-5" data-aos="zoom-in-up">
        <div class="container py-5">
          <div class="text-center">
            <h3 class="fw-bold" style="color: #0092ca;">Fasilitas SD</h3>
          </div>
          <img src="img/fasilitas.png" class="img-fluid py-5">
        </div>
      </section>

    
      <section id="footer" style="background-color: #79c2d0;" data-aos="zoom-out">
        <div class="container py-4">
          <footer>
            <div class="row">
              <div class="col-12 col-md-3 mb-3">
                <h5 class="fw-bold mb-3">Navigasi</h5>
                <div class="d-flex">
                  <ul class="nav flex-column me-5">
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Berita Sekolah</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Gallery Sekolah</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Kegiatan Sosial</a></li>
                  </ul>
                  <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Alumni</a></li>
                  <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Info PSB</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Prestasi</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">Video Kegiatan</a></li>
                  </ul>
                </div>
              </div>

                <div class="col-12 col-md-3 mb-3">
                  <h5 class=" fw-bold mb-3">Follow kami</h5>
                  <div class="d-flex mb-3">
                    <a href="#" target="_blank" class="text-decoration-none text-dark">
                      <img src="img/tiktok.png" height="30" width="30" class="me-4">
                    <a href="#" target="_blank" class="text-decoration-none text-dark">
                      <img src="img/yt.png" height="30" width="30" class="me-4">
                    <a href="#" target="_blank" class="text-decoration-none text-dark">
                      <img src="img/fb.png" height="30" width="30" class="me-4">
                    <a href="#" target="_blank" class="text-decoration-none text-dark">
                      <img src="img/ig.png" height="30" width="30" class="me-4">
                    </a>
                  </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                  <h5 class="font-inter fw-bold mb-3">Kontak kami</h5>
                  <ul class="nav flex-column">
                  <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">sdn1banjaranyar.sch.id</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">089-518-579-487</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">089-518-579-487</a></li>
                    <li class="nav-item mb-2">
                      <a href="" class="nav-link p-0 text-muted">089-518-579-487</a></li>
                  </ul>
                </div>

                <div class="col-12 col-md-3 mb-3">
                  <h5 class="font-inter fw-bold mb-3">Alamat Sekolah</h5>
                  <p>Jl. Banjaranyar, no 110, Pekuncen, Banyumas, Jawa Tengah.</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>

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
