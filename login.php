<?php
include 'config.php';
session_start();
 
if (isset($_GET['username'])) {
    header("Location:login.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $nip = mysqli_real_escape_string($db, $_POST['nip']);
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM user WHERE nip='$nip' AND password ='$password'";
    $result = mysqli_query($db, $sql);
 
    if ($result->num_rows > 0) {                         
        $row = mysqli_fetch_assoc($result);
        $_GET['username'] = $row['username'];
        header("Location: list-siswa.php");
        exit();
    } else {
        echo "<script>alert('Nip atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-Nip">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="nip" placeholder="Nip" name="nip" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>