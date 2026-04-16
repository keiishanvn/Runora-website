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
<style>
table {
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
</style>
<body>

<h2>Daftar Produk</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while($data = mysqli_fetch_array($query)) { ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['stok']; ?></td>
        <td>
    <a href="delete.php?id=<?php echo $data['id']; ?>" 
       onclick="return confirm('Yakin mau hapus?')">
       Hapus
    </a>
</td>
    </tr>
    <?php } ?>

</table>

</body>
</html>