<?php
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="../tambah.css">
</head>
<body>
  <div class="container">
    <form action="../proses/addData.php" method="POST">
      <h3>Tambah Games</h3>
      <div class="inputBox">
        <label for="">Nama</label>
        <input type="text" name="nama" id="" placeholder="Nama Games" required>
      </div>
      <div class="inputBox">
        <label for="">Genre</label>
        <input type="text" name="genre" id="" placeholder="Genre Games" required>
      </div>
      <div class="inputBox">
        <label for="">Deskripsi</label>
        <input type="text" name="deskripsi" id="" placeholder="Deskripsi Singkat" required>
      </div>
      <input type="submit" value="Tambah Games" name="tambah">
      <a href="../dashboard.php">Kembali</a>
    </form>
  </div>
</body>
</html>