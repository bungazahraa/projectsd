<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.png">
    <title>SDN 1 Banjaranyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="container9">
<nav class="navbar navbar-expand-lg shadow navbar-light bg-light fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="55" height="55">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse  navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
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
<br> <br> <br>
    <div class="container mt-5"data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back"
                                data-aos-delay="300"
                                data-aos-offset="0">
    <h1 class="text-center fw-bold">Berita <span style="color: #4a90e2;">SDN 1 BANJARANYAR </span></h1><br>
    <a href="{{ route('news.create') }}" class="btn btn-warning">Tambah Berita</a><br>
    <table class="table-custom">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Nama</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach (\App\Models\News::all() as $item)

          <tr>
                <td>{{ $item->id }}</td>
                <td>
                   
                    <img src="{{ asset('storage/' . $item->image_url) }}" style="width: 100px;">                   
                      
                </td>
                <td>
                  {{ $item->nama }}
                </td>
                <td>
                    {{ $item->title }}
                </td>
                <td>
                    {{ Str::limit($item->content, 150) }}
                </td>


                <td>
                <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
      </body>
      </html>
      

  
