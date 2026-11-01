<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$kehadiran = $_POST['kehadiran'];
$pesan = $_POST['pesan'];

$query = mysqli_query(
$conn,
"INSERT INTO ucapan
(nama, kehadiran, pesan)

VALUES

('$nama','$kehadiran','$pesan')"
);

header("Location: invitation.php");

?>