<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 15px;
        }
        
        .navbar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            text-align: center;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar a.home { background-color: #555; }
        .navbar a.barang { background-color: #555; }
        .navbar a.pelanggan { background-color: #555; }
        .navbar a.transaksi { background-color: #555; }

        .navbar a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php?menu=home" class="home">Home</a>
        <a href="index.php?menu=barang" class="barang">Barang</a>
        <a href="index.php?menu=pelanggan" class="pelanggan">Pelanggan</a>
        <a href="index.php?menu=transaksi" class="transaksi">Transaksi</a>
    </div>
</body>
</html>
