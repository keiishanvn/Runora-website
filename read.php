<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk RUNORA</title>
</head>
<body>

<h2>Daftar Produk</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php while($data = mysqli_fetch_array($query)) { ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['stok']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>