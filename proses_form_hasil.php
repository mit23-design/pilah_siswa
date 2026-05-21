<?php
$nilai =85;
if ($nilai >=90){
    $grade = "A";
} elseif ($nilai>=75){
    $grade = "B";
}elseif ($nilai>=65) {
    $grade= "C";
}elseif($nilai>=45){
    $grade ="D";
}else{
    $grade = "E";
}
echo "Nilai Anda: $nilai, $grade";
?>