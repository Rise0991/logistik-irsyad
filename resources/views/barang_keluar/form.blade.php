<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('/img/icon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <title>Daftar Barang Masuk</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('/img/logo.png') }}" height="50px;">Irsyad Logistik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/stok-barang">Stok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/barang-masuk">Daftar Barang Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/barang-keluar">Daftar Barang Keluar</a>
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>

<!-- pop up error apabila kode barang dan jumlah barang kurang -->
<div class="container mt-3">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<form action="{{ route('barang_keluar.simpan') }}" method="POST">
@csrf
  <div class="head-brg" style="text-align: center; padding-top: 4rem; padding-bottom: 3rem">
      <h2>Pencatatan Barang Keluar</h2>
  </div>
  <div class="row justify-content-center" style="padding: 1rem;">
    <div class="col-md-4" style="border-style: solid; border-radius: 10px; padding: 2rem;">
      <div class="mb-3">
        <label for="no_barang_keluar" class="form-label">No. Barang Keluar:</label>
        <input type="text" id="no_barang_keluar" name="no_barang_keluar" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="kode_barang" class="form-label">Kode Barang:</label>
        <input type="text" id="kode_barang" name="kode_barang" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="destination" class="form-label">Tujuan Barang:</label>
        <input type="text" id="destination" name="destination" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="tanggal_keluar" class="form-label">Tanggal Keluar:</label>
        <input type="date" id="tanggal_keluar" name="tanggal_keluar" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100" style="text-align: center;">Simpan</button>
    </div>
  </div>

      
  </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.querySelector('.alert');
        if (alert) {
            setTimeout(() => {
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 300);
            }, 5000);
        }
    });
</script>

</body>
</html>
