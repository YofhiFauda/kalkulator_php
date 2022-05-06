<?php

function input() {
    return fgets(STDIN);
}

echo "Masukan NIM Mahasiswa : ";
$nim = input();
echo "Masukan NAMA Mahasiswa : ";
$namaMahasiswa = input();
echo "Masukan Mata Kuliah : ";
$namaMataKuliah = input();
echo "Masukan Nilai Absensi : ";
$nilaiAbsensi = input();
echo "Masukan Nilai Tugas : ";
$nilaiTugas = input();
echo "Masukan Nilai UTS : ";
$nilaiUts = input();
echo "Masukan Nilai UAS : ";
$nilaiUas = input();
echo "\n";
echo "NIM Mahasiswa : ". $nim . PHP_EOL;
echo "Nama Mahasiswa : " . $namaMahasiswa . PHP_EOL;
echo "Nama Mata Kuliah : ". $namaMataKuliah . PHP_EOL;
$nilaiAKhir = 0.2 * $nilaiAbsensi + 0.25 * $nilaiTugas + 0.25 * $nilaiUts + 0.3 * $nilaiUas;
if ($nilaiAKhir >= 81 && $nilaiAKhir <= 100) {
    echo "Nilai Akhir : ". $nilaiAKhir . PHP_EOL;
    echo "grade A" . PHP_EOL;

} elseif ($nilaiAKhir >= 75 && $nilaiAKhir <= 80){
    echo "Nilai Akhir : ". $nilaiAKhir . PHP_EOL;
    echo "grade B" . PHP_EOL;
}elseif ($nilaiAKhir >= 60 && $nilaiAKhir <= 74) {
    echo "Nilai Akhir : ". $nilaiAKhir . PHP_EOL;
    echo "grade C" . PHP_EOL;
}elseif ($nilaiAKhir >= 41 && $nilaiAKhir <= 59) {
    echo "Nilai Akhir : ". $nilaiAKhir . PHP_EOL;
    echo "grade D" . PHP_EOL;
}elseif ($nilaiAKhir >= 0 && $nilaiAKhir <= 40) {
    echo "Nilai Akhir : ". $nilaiAKhir . PHP_EOL;
    echo "grade E" . PHP_EOL;
}
if ($nilaiAKhir >= 60 && $nilaiAKhir <= 100) {
    echo "lulus" . PHP_EOL;
} elseif ($nilaiAKhir >= 0 && $nilaiAKhir <= 59) {
        echo "tidak lulus" . PHP_EOL;
    }


?>