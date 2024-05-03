<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
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

                    <div class="mb-3 text-center">
                        <i class="bi-archive-fill fs-1"></i>
                        <h4>Input Items</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">Items Code</label>
                            <input class="form-control" type="text" name="firstName" id="firstName" value="{{ old('firstName') }}" placeholder="Enter Items Code">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Items Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="{{ old('lastName') }}" placeholder="Enter Items Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Description</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Description">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Price</label>
                            <input class="form-control" type="text" name="age" id="age" value="{{ old('age') }}" placeholder="Enter Price">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
