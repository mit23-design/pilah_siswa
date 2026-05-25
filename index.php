<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilah nilai siswa</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Mari Seleksi Nilai Anda</h1>
        <p>Biar Kami yang grade nilai anda</p>
        <form class="input-form" action="form_hasil.php" method="post">
            <label>Nama:</label>
            <input type="text" name="Nama" placeholder="Masukkan Nama Anda" required>
            
            <label>Kelas:</label>
            <select name="kelas">
                <option value="" disabled selected hidden>-- pilih kelas anda --</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
            
            <label>Nilai:</label>
            <input type="number" name="nilai" placeholder="masukkan nilai anda" required>
            
            <label>Email:</label>
            <input type="email" name="email_siswa" placeholder="Email@gmail.com">
            
            <button type="submit" >Lihat Nilai Anda</button>
        </form>
    </div>
</body>
</html>