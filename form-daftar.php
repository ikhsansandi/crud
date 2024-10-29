<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <div class="container">
        <form action="proses-pendaftaran.php" method="POST" class="Daftar"> 
        <p class="daftar-text" style="font-size: 2rem; font-weight:500;">Pendaftaran Siswa Baru</p>
            <div class="input-group">
                <input type="text" name="nama" placeholder="nama lengkap" required>
             </div>  
             <div class="input-group">
                <input type="text" name="alamat" placeholder="alamat" required>
             </div>
             <div class="input-group">
                <input type="text" name="jenis_kelamin" placeholder="jenis kelamin" required>
             </div>
             <div class="input-group"> 
                <input class="text" name="agama" placeholder="agama" required>
             </div>
             <div class="input-group">
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" required>
             </div>
             <div class="input-group">
            <button input type="submit" class="btn" value="Daftar" name="daftar">Daftar</button> 
             </div>
        </form>
    </div>
    </body>
</html>