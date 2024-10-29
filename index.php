<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Siswa Baru | SMK NEGERI 26 BUMIAYU</title>
    <meta charset="UTF-8">
    <meta name="description"> 
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header>
        <h1 class="title">SMK NEGERI 26 BUMIAYU</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="form-daftar.php">Pendafataran Siswa Baru</a></li>
            <li><a href="login.php">Admin</a></li>
        </ul>
    </nav>
    
<div id="contents">
<?php 
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case'home':
                include "home.php";
                break;
            case'about':
                include "about.php";
                break;
            case'contact':
                include "contact.php";
                break;
      }
    } else {
        include "home.php";
            }
    ?>
    </div>
    <footer>
        &Copyrigt Ikhsan sandi putra 2024
    </footer>
    </body>
</html>