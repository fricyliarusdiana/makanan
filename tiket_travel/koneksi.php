<?php
$conn = mysqli_connect("localhost", "root", "", "tiket_travel");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>