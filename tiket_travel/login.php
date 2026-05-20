<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, 
    "SELECT * FROM user WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: user.php");
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Login</h2>

        <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button name="login">Login</button>
        </form>

    </div>
</div>

</body>
</html>