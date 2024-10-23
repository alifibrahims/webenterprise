<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link></link>
</head>
<body>
    <!--sidebar-->
    <div class="sidebar">
        <h2>Dasbord Penjualan</h2>
        <ul>
            <li><a href="{{url('home') }}">Home</a></li>
            <li><a href="{{url('home') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
        </div>

        <div class="main-content">
            <header style="display: flex; justify-content:space-between">
                <div>
                    <h1>Daftar Produk</h1>
                    <p>Temuan produk terbaik untuk kebutuhan Anda</p>
                </div>
</header>
<div>
    <div class="container">
        <h1>Create Produk</h1>

        <form action="{{ url('/profuk/add) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Nama Produk</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Harga">Harga</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Harga">Jumlah produk</label>
                <input type="text" name="jumlah_produk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
        </div>

        <footer>
            <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
        </footer>
</body>
</html>