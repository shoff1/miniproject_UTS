<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial
scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i
class="bi bi-box-seam-fill me-2"></i>Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs
toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"
id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('employees.index') }}" class="nav-link">Items</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-dark my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My
Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-person-bounding-box me-3 fs-1"></div>
            <h4 class="mb-0">Name: Shofiyah Labibah</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-list-columns me-3 fs-1"></div>
            <h4 class="mb-0">NIM: 1204220097</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-book me-3 fs-1"></div>
            <h4 class="mb-0">Original Class: IS-05-03</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-calendar-date-fill me-3 fs-1"></div>
            <h4 class="mb-0">Tahun Masuk: 2022</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi-person me-3 fs-1"></div>
            <h4 class="mb-0">Jenis Kelamin: Perempuan</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-building-fill me-3 fs-1"></div>
            <h4 class="mb-0">Jurusan: Sistem Informasi</h4>
</div>

<div class="d-flex align-items-center py-2 px-4 bg-light rounded
3 border">
            <div class="bi bi-bank me-3 fs-1"></div>
            <h4 class="mb-0">Fakultas: Rekayasa Industri</h4>
</div>
</div>
@vite('resources/js/app.js')
</body>
</html>
