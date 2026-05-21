<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilah nilai siswa</title>
</head>
<body>
    <div class="container">
        <h1>Mari Seleksi Nilai Anda</h1>
        <p>Biar Kami yang grade nilai anda</p>
        <form class="input-form" action="form_hasil.php" method="post">
            <label for="name">Nama:</label>
            <Input type="text" name="Nama" placeholder="Masukkan Nama Anda" required>
            <label for="">Kelas:</label>
            <select name="kelas" id="kelas">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
            <label for="nilai">Nilai:</label>
            <input type="number" required placeholder="masukkan nilai anda">
            <label for="email">Email:</label>
            <input type="email" placeholder="Email@gmail.com">
            <input type="submit" name="submit" id="submit" value="Lihat Nilai Anda">
        </form>
    </div>
</body>
</html>