<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>TravelKu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Registrasi</a>
</div>

<div class="container">
    <h2>TravelKu - Tiket Perjalanan</h2>

    <div class="card">
        <h3>Daftar Tiket</h3>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM tiket");
        while($row = mysqli_fetch_assoc($data)){
            echo "<p>
            {$row['transportasi']} | 
            {$row['asal']} → {$row['tujuan']} | 
            Rp {$row['harga']}
            </p>";
        }
        ?>
    </div>
</div>

</body>
</html>