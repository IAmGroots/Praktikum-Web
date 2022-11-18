<?php
include "koneksi.php";
session_start();
if ($_SESSION["akses"] != "user") {
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <script>
    function transaksi(){
      alert("Website masih dalam tahap pengembangan")
    }
    function beli(){
      alert("Terima Kasih, Anda telah membeli Games")
    }
  </script>
</head>

<body>
  <!-- Navigation Start -->
  <header id="home">
    <nav>
      <h1 class="logo">
        <a href="">Asep PS3</a>
      </h1>
      <div class="nav-link">
        <div class="links hover-none">
          <a href="#home">Home</a>
        </div>
        <div class="links hover-none">
          <a href="#games">Games</a>
        </div>
        <div class="links hover-none">
          <a href="#contact">Contact</a>
        </div>
        <div class="links hover-none">
          <a href="#aboutMe">About Me</a>
        </div>
        <div class="links hover-none">
          <a href="#" onclick="transaksi()">Transaksi</a>
        </div>
        <div class="links">
          <div class="mode">
            <p id="change-mode">Dark Mode</p>
            <img id="icon-mode" src="images/moon.png" alt="" />
            <input type="checkbox" onclick="lightMode()" />
          </div>
        </div>
        <div class="links">
          <a href="logout.php">Logout</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Navigation End -->

  <!-- Home Page Start -->
  <div class="container-banner banner" id="home">
    <div class="judul">PlayStation 3</div>
    <div class="main-teks">
      <p>
        PlayStation 3 (Jepang: プレイステーション 3; merek dagang: PLAYSTATION
        3, disingkat PS3) adalah konsol Sony generasi ketiga. PlayStation 3
        merupakan penerus dari PlayStation dan PlayStation 2. Konsol ini
        bersaing dengan Xbox 360 dari Microsoft dan Wii dari Nintendo.
        PlayStation 3 dirilis di Jepang pada tanggal 11 November 2006, dan
        dirilis pada tanggal 17 November 2006 di Amerika Utara, Hong Kong dan
        Taiwan, dan 1 atau 7 Maret 2007 di Eropa dan Australasia, dan wilayah
        lainnya.
      </p>
      <div class="teks">
        <br />
        <p>
          PlayStation 3 secara resmi diperkenalkan kepada dunia pada tanggal
          16 Mei 2005 di E3. Konfigurasi final pertama dipertunjukkan di TGS
          (Tokyo Game Show) 2006. Teknologi terbaru yang digunakan adalah cell
          processor-nya, kemampuan cell processor untuk melakukan operasi
          floating point sangat baik karena cell processor merupakan
          arsitektur vector processor. Bahkan prosesor yang digunakan pada
          PlayStation 3 ini merupakan prosesor yang tercanggih saat ini.
          Selain itu GPU dibuat sendiri oleh Sony yang bekerjasama dengan
          NVidia.
        </p>
      </div>
    </div>
    <div class="btn-more">
      <p>Read More <i class="uil uil-arrow-right"></i></p>
    </div>
  </div>
  <!-- Home Page End -->

  <!-- Games Page Start -->
  <div class="container" id="games">
    <div class="listGames">Top 10 PS3 Games For You</div>
    <div class="boxCard">
      <?php
        $result = mysqli_query($koneksi, "SELECT * FROM listgames");
        while ($row = mysqli_fetch_assoc($result)){
          echo "<div class='card'>";
            echo "<img src='databaseImages/$row[gambar]' alt='' />";
            echo "<div class='overlay overlayBg'>";
              echo "<div class='tittle'>$row[nama]</div>";
              echo "<div class='desc'>";
                // echo "<a href='cek_login.php?id=$row[id_game]'>Beli Sekarang</a>";
                echo "<a href='' onclick='beli()'>Beli Sekarang</a>";
                echo "<span>Rating $row[rating]/10</span>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        }
      ?>
    </div>
  </div>

  <!-- About Me n Form Page Start -->
  <div class="container" id="aboutMe">
    <div class="aboutMe-form">
      <div class="biodata">
        <img src="images/foto-profile.jpg" alt="" />
        <div class="data">
          <p>Muhammad Hadiseptian Nursukamto</p>
          <p>2109106058</p>
          <p>Mahasiswa Informatika</p>
          <p>Universitas Mulawarman</p>
        </div>
      </div>
      <form action="" href="#aboutMe">
        <div class="boxForm">
          <h3>Request Games</h3>
          <div class="inputBox">
            <label for="">Nama Games</label>
            <input type="text" name="" id="" placeholder="Nama Games" />
          </div>
          <div class="inputBox">
            <label for="">Email User</label>
            <input type="email" name="" id="" placeholder="Example@gmail.com" />
          </div>
          <div class="inputBox">
            <label for="">No Telepon</label>
            <input type="tel" name="" id="" placeholder="081234567890" />
          </div>
          <div class="inputBox">
            <label for="">Tanggal</label>
            <input type="date" name="" id="" />
          </div>
          <input onclick="popUp()" type="submit" value="Submit" />
        </div>
      </form>
    </div>
  </div>
  <!-- About Me n Form Page End -->

  <!-- Footer Start -->
  <footer id="contact">
    <div class="sosmed">
      <a href=""><i class="uil uil-instagram"></i></a>
      <a href=""><i class="uil uil-twitter"></i></a>
      <a href=""><i class="uil uil-youtube"></i></a>
      <a href=""><i class="uil uil-github"></i></a>
      <a href=""><i class="uil uil-linkedin"></i></a>
    </div>
    <div class="list">
      <div class="listLink">
        <a href="#home">Home</a>
        <a href="#games">Games</a>
        <a href="#aboutMe">About Me</a>
      </div>
    </div>
    <p class="copyright">&copy Copyright 2022 - by IAmGroots</p>
  </footer>
  <!-- Footer End -->
</body>

<script src="script.js"></script>

</html>