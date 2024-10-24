<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'functions.php';

$barang = query("SELECT * FROM baju");

if (isset($_POST['search'])) {
    $barang = search($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <div class="top_navbar">
            <div class="logo">
                <a href="#">Aida Shop</a>
            </div>
            <div class="top_menu">
                <div class=""></div>
                <div class="home_link">
                    <a href="logout.php">
                        <span class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main_body">
            <div class="sidebar_menu">
                <div class="inner__sidebar_menu">
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="icon"> <i class="fas fa-border-all"></i></span>
                                <span class="list">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="barang.php" class="active">
                                <span class="icon"><i class="fas fa-warehouse"></i></span>
                                <span class="list">Daftar Barang</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <a href="TambahBarang.php">
                    <button class="btn-primary">
                        <i class="fas fa-plus"></i>Tambah Barang
                    </button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h1>Daftar Barang</h1>
                        <br>
                        <form action="" method="POST">
                            <input type="text" name="keyword" id="keyword" class="input-search" placeholder="pencarian..." autocomplete="off" />
                            <button type="submit" name="search" class="success" id="btn-search">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-body" id="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Baju</th>
                                    <th>Size</th>
                                    <th>Warna</th>
                                    <th>Jumlah Baju</th>
                                    <th>Harga Baju</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($barang as $row) : ?>
                                    <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= htmlspecialchars($row['nama_baju']); ?></td>
                                    <td><?= htmlspecialchars($row['size']); ?></td>
                                    <td><?= htmlspecialchars($row['warna']); ?></td>
                                    <td><?= htmlspecialchars($row['jumlah']); ?></td>
                                    <td>Rp. <?= htmlspecialchars($row['harga']); ?></td>
                                    <td style="text-align: center;">
                                        <a href="EditBarang.php?id=<?= $row['id']; ?>">
                                        <button class="warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        </a>
                                        <a href="DeleteBarang.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?');">
                                        <button class="delete">
                                             <i class="fas fa-trash"></i>
                                        </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
