

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #37474f;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* align-items: center; */
      background: #303030;
      border-radius: 10px;
    }

    .container h1 {
      color: #ffffff;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: #10dddd;
      color: #000000;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>List Request Games</h1>
    <table>
      <tr>
        <th>Nama Games</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Tanggal</th>
      </tr>
      <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $telepon = $_POST["telepon"];
        $date = $_POST["date"];
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>$telepon</td>";
        echo "<td>$date</td>";
        echo "<tr>";
      ?>
    </table>
  </div>
</body>
</html>

