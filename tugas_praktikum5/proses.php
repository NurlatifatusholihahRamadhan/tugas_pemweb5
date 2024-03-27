<?php

$nama = $_POST['nama'];
$harga = $_POST['harga'];

include 'Benda.php';

$benda = new Benda($nama, $harga);
$klasifikasi = $benda->klasifikasiHarga();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benda</title>
</head>
<body>
  <table border ="1" width = "100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Klasifikasi Harga</th>
      </tr>
    </thead>
    <tbody align="center">
      <tr>
        <td><?=$nama?></td>
        <td><?=$harga?></td>
        <td><?=$klasifikasi?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
      
