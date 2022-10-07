<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <header class="header-navigation mt-3">
        <div class="container">
            <nav class="navigations">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="logo">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="button-logout">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="content">
            <div class="container-fluid m-0 px-5" style="max-width: 100vw;">
                <div class="row">
                    <div class="col-lg-3 mt-4">
                        <div class="sidebar">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Produk</a></li>
                                <li><a href="{{ route('pelanggan.show') }}">Daftar Pelanggan</a></li>
                                <li><a href="{{ route('penjualan.show') }}">Daftar Pesanan Penjualan</a></li>
                                <li><a href="{{ route('salesorder.show') }}">Sales Order</a></li>
                            </ul>
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>