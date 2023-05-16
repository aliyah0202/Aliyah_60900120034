<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olahraga Populer Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-2">Olahraga Populer Indonesia</h2>
    <div class="container mt-3">
    <form>
  <div class="mb-3">
    <label for="nama_olahraga" class="form-label">Nama Olahraga</label>
    <input type="text" class="form-control" id="nama_olahraga" name="nama_olahraga" value="{{$OlahragaPopulerIndonesia->nama_olahraga}}" disabled>
  </div>

    <div class="mb-3">
    <label for="desk_singkat" class="form-label">Deskripsi Singkat</label>
    <input type="text" class="form-control" id="desk_singkat" name="desk_singkat" value="{{$OlahragaPopulerIndonesia->desk_singkat}}" disabled>
  </div>
  
  <a href="/" class="btn btn-primary">Kembali</a>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>