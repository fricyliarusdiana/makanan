<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <div class="card">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?> 👋</h2>

        <h3>Tiket Tersedia</h3>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM tiket");
        while($row = mysqli_fetch_assoc($data)){
            echo "<p>
            {$row['transportasi']} | 
            {$row['asal']} → {$row['tujuan']} | 
            Rp {$row['harga']} 
            <button>Pesan</button>
            </p>";
        }
        ?>
    </div>
</div>

</body>
</html>