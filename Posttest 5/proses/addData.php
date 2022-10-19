<?php
  include "../koneksi.php";

  if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $genre = $_POST["genre"];
    $deskripsi = $_POST["deskripsi"];

    $sql = "INSERT INTO listgames VALUES ('','$nama', '$genre', '$deskripsi')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
      echo"
        <script>
          alert('Data berhasil ditambah');
          document.location.href = '../dashboard.php';
        </script>
      ";
    }else{
      echo"
        <script>
          alert('Data gagal ditambah');
          document.location.href = '../dashboard.php';
        </script>
      ";
    }
  }
?>