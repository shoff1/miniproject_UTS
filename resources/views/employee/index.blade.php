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
class="bi-hexagon-fill me-2"></i> Data Master</a>

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
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('employees.create') }}" class="btn
btn-dark">Update Items</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped
mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Meja</td>
                        <td>200.000</td>
                        <td>Meja lipat untuk belajar</td>
                        <td>1</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show',
['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi bi-back"></i></a>
                                <a href="{{ route('employees.edit',
['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{
route('employees.destroy', ['employee' => 1]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn
btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Buku</td>
                        <td>10.000</td>
                        <td>Untuk mencatat materi</td>
                        <td>1</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show',
['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi bi-back"></i></a>
                                <a href="{{ route('employees.edit',
['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{
route('employees.destroy', ['employee' => 2]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn
btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Ballpoint</td>
                        <td>5.000</td>
                        <td>Untuk menulis materi di buku</td>
                        <td>10</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('employees.show',
['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi bi-back"></i></a>
                                <a href="{{ route('employees.edit',
['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i
class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{
route('employees.destroy', ['employee' => 3]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn
btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
