<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'functions.php';
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
              <a href="index.php" class="active">
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
    <div class="card" style="background-color: #EFC3CA; color: white; text-align: center; padding: 20px;">
        <h2>Selamat Datang di Dashboard!</h2>
    </div>
    <div class="photo-gallery" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 20px;">
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo1.jpg" alt="Foto 1" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo2.jpg" alt="Foto 2" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo3.jpg" alt="Foto 3" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo4.jpg" alt="Foto 4" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo5.jpg" alt="Foto 5" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
        <div class="photo-card" style="text-align: center;">
            <img src="img/photo6.jpg" alt="Foto 6" style="width: 150px; height: 150px; border-radius: 10px;">
        </div>
    </div>
</div>
    </div>
  </div>
</body>
</html>
