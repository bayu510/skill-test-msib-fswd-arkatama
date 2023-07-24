<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "input";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$data_pengguna = $_POST['data_pengguna'];

list($nama, $usia, $kota) = explode(' ', $data_pengguna, 3);

$nama = mysqli_real_escape_string($conn, $nama);
$usia = (int)$usia;
$kota = mysqli_real_escape_string($conn, $kota);

$sql = "INSERT INTO data_pengguna (NAME, AGE, CITY, CREATED_AT) VALUES ('$nama', $usia, '$kota', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
