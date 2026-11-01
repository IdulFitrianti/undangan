<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "wedding_db";

/* KONEKSI DATABASE */
$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $db
);

/* CEK KONEKSI */
if (!$conn) {

    die(
        "Koneksi gagal: " .
        mysqli_connect_error()
    );

}

/* SET UTF8 */
mysqli_set_charset($conn, "utf8");

?>