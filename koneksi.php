<!-- Sekar Keisha - 065124148 -->

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "runora";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error){
    echo "gagal nyambung nih";
    exit();
}

// echo "berhasil nyambung yey! <br>";

?>