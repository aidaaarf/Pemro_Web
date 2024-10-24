<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

include 'functions.php';

if (isset($_POST["save"])) {

  if (tambahBarang($_POST)) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'barang.php';
        </script>";
  } else {
    echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'barang.php';
        </script>";
  }
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
              <a href="barang.php">
                <span class="icon"><i class="fas fa-warehouse"></i></span>
                <span class="list">Daftar Barang</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-header">
            <h1>Tambah Barang</h1>
          </div>
          <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="nama_baju">Nama Baju</label>
        <input type="text" name="nama_baju" class="input-text" placeholder="Masukkan Nama Baju" required />
    </div>

    <div class="form-group">
        <label for="size">Ukuran Baju</label>
        <input type="text" name="size" class="input-text" placeholder="Masukkan Ukuran Baju" required />
    </div>

    <div class="form-group">
        <label for="warna">Warna Baju</label>
        <input type="text" name="warna" class="input-text" placeholder="Masukkan Warna Baju" required />
    </div>

    <div class="form-group">
        <label for="jumlah">Jumlah Baju</label>
        <input type="number" min="0" name="jumlah" class="input-text" placeholder="Masukkan Jumlah Baju" required />
    </div>

    <div class="form-group">
        <label for="harga">Harga Baju</label>
        <input type="text" name="harga" class="input-text" placeholder="Masukkan Harga Baju" required />
    </div>

    <button type="submit" name="save" class="btn-success" style="width: 97%; margin: 10px 10px;">
        Simpan
    </button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>