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
<body  class="container12">
    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5  rounded text-white">
           


<form action="{{ route('news.update', $news->id) }}" method="POST" class="form12" enctype="multipart/form-data">
<h1 class="mt-4 mb-4 form-title12" style="color: white;">Edit Data</h1>
    @csrf
    @method('PUT')
    <div class="mb-3 text-start input-container12">
    <label for="image">Gambar Berita:</label><br>
   
        <img src="{{ asset('storage/' . $news->image_url) }}"  width="200" accept="image/*" required><br><br>
   
    <input type="file" name="image" id="image"><br><br>
    </div>

    <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $news->nama }}" required>
    </div>

    <div class="mb-3 text-start input-container12">
    <label for="title">Judul Berita:</label><br>
    <input type="text" name="title" id="title" value="{{ $news->title }}" required><br><br>
    </div>

    <div class="mb-3 text-start input-container12">
    <label for="content">Isi Berita:</label><br>
    <input type="text" name="content" id="content" value="{{ $news->content }}" required></input><br><br>
    </div>

    <button type="submit12" class="submit12">Update</button>
</form>

      
</div>
    </div>
   </div>
   <br><br>

    </body>
</html>