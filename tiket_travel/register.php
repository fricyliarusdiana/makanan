<?php
include "koneksi.php";

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO user 
    (nama, email, username, password)
    VALUES ('$nama','$email','$username','$password')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Registrasi</h2>

        <form method="POST">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button name="daftar">Daftar</button>
        </form>

    </div>
</div>

</body>
</html>