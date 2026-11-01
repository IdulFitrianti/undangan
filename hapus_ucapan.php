<?php

include 'koneksi.php';

/* AMBIL ID */
$id = $_GET['id'];

/* HAPUS DATA */
$query = mysqli_query(
$conn,
"DELETE FROM ucapan
WHERE id = '$id'"
);

/* KEMBALI */
header("Location: invitation.php");

?>