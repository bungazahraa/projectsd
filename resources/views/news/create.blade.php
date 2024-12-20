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
<body class="container12">
    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center rounded text-white">
           

    <form action="{{ route('news.store') }}" method="POST" class="form12" enctype="multipart/form-data">
    <h1 class="mt-4 mb-4 form-title12" style="color: white;">Tambah Data</h1>
        @csrf
        <div class="mb-3 text-start input-container12">
        <label>Gambar Berita:</label><br>
        <input type="file" name="image" id="image" placeholder="image" accept="image/*" required><br><br>
        </div>

        <div class="mb-3 text-start input-container12">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>


        <div class="mb-3 text-start input-container12">
        <label>Judul Berita:</label><br>
        <input type="text" name="title" placeholder="judul berita" required><br><br>
        </div>
        

        <div class="mb-3 text-start input-container12">
        <label>Isi Berita:</label><br>
        <input type="text" name="content" placeholder="isi berita" required></input><br><br>
        </div>

        <button type="submit12" class="submit12">Simpan</button>
    </form>

    </div>
    </div>
   </div>

    </body>
</html>
