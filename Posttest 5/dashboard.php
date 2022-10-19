<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
</head>
<body>
<div class="container">
  <h2>Daftar List Games</h2>
  <div class="tabel">
    <table>
      <tr class="row">
        <th class="thNo">No</th>
        <th class="thNama">Nama</th>
        <th class="thGenre">Genre</th>
        <th class="thDesc">Deskripsi</th>
        <th class="thAction">Action</th>
      </tr>

      <?php
        $query = mysqli_query($koneksi, "SELECT * FROM listGames");
        $no = 1;

        while($row = mysqli_fetch_array($query)){
          echo "<tr class='row'>";
          echo "<td class='no'>$no</td>";
          echo "<td class='nama'>$row[nama]</td>";
          echo "<td>$row[genre]</td>";
          echo "<td>$row[deskripsi]</td>";
          echo "<td class='action'><a href='halaman/editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                    <a href='proses/deleteData.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a></td>";
          $no++;
        }
      ?>
    </table>
    <div class="tombol">
      <a href="halaman/addData.php" class="hijau">Add</a>
    </div>
    <a href="index.html" class="back">Kembali</a>
  </div>
</div>
</body>
</html>