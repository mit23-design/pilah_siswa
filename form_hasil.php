<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['Nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];
    $email = $_POST['email_siswa'];
} else {
    header("Location: index.php");
    exit();
}

function ubah_tools($aku){
    if($warnaku == 'A'){
        return "biru";
    }elseif($warnaku == 'B'){
        return "merah";
    }elseif($warnaku == 'C'){
        return "kuning";
    }else{
        return "gapunya kelas";
    }
}
function penilaian ($value){
    if ($value <= 100 && $value >= 90 ){
        $grade = 'A';
    } elseif($value <= 89 && $value >= 75){
        $grade = 'B';
    } elseif($value <= 74 && $value >= 65){
        $grade = 'C';
    } elseif($value <= 64 && $value >= 45){
        $grade = 'D';
    } else {
        $grade = 'E';
    }
    return $grade;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contain">
    <h1>Grade Anda</h1>    
    <div class="box-hasil">
            <p><strong>Nama :  </strong> <?php echo $nama; ?></p>
            <p><strong>Kelas: </strong> <?php echo ubah_tools($kelas); ?></p>
            <p><strong>Nilai: </strong> <?php echo $nilai; ?></p>
            <p><strong>Email: </strong> <?php echo $email; ?></p>
            <p><strong>Grade: </strong><?php echo penilaian($nilai); ?></p>
            <a href="index.php">Kembali</a>
        </div>
    </div>
</body>
</html>