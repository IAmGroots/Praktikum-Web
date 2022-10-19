<?php
  include "../koneksi.php";

  $id = $_GET["id"];
  $query = mysqli_query($koneksi, "SELECT * FROM listGames WHERE id='$id'");
  $row = mysqli_fetch_array($query);
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
    <form action="../proses/editData.php?id=<?php echo $row["id"]?>" method="POST">
      <div class="inputBox">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?php echo $row["nama"]?>" required>
      </div>
      <div class="inputBox">
        <label for="">Genre</label>
        <input type="text" name="genre" value="<?php echo "$row[genre]"?>" required>
      </div>
      <div class="inputBox">
        <label for="">Deskripsi</label>
        <input type="text" name="deskripsi" id="" value="<?php echo "$row[deskripsi]"?>" required>
      </div>
      <input type="submit" value="Ubah Games" name="ubah">
      <a href="../dashboard.php">Kembali</a>
    </form>
  </div>
</body>
</html>