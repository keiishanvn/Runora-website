<!-- Gerrald Ticoalu - 065124133 -->
<?php
include 'koneksi.php';

$cek = mysqli_query($conn, "SHOW TABLES LIKE 'ilkom'");

if(mysqli_num_rows($cek) > 0){
    mysqli_query($conn, "ALTER TABLE ilkom RENAME TO ilmu_komputer");
    echo "Berhasil rename!";
} else {
    echo "Tabel tidak ditemukan!";
}
?>