<!-- Sekar Keisha - 065124148 -->

<?php
include 'koneksi.php';

// Kita siapkan data dalam variabel (ceritanya ini data produk Runora)
$nama_produk = "Sepatu Lari Runora v1";
$kategori    = "Sepatu";
$harga       = 550000;
$stok        = 20;

// Perintah SQL untuk memasukkan data
$sql = "INSERT INTO produk (nama_produk, kategori, harga, stok) 
        VALUES ('$nama_produk', '$kategori', '$harga', '$stok')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Mantap! Data produk baru berhasil ditambah.";
} else {
    echo "Waduh, gagal karena: " . mysqli_error($conn);
}
?>