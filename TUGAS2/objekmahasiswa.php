<?php
require_once 'Mahasiswa.php';

$mahasiswa1 = new Mahasiswa("Ali", "23.240.0034", "Teknik Informatika", 3, 3.8);
$mahasiswa2 = new Mahasiswa("akmal", "23.240.1234", "Sistem Informasi", 3, 3.8);

echo $mahasiswa1->tampilkanInfo() . "\n";
echo "Sisa semester: " . $mahasiswa1->sisaSemester() . "\n";
echo "Status aktif: " . ($mahasiswa1->isAktif() ? "Ya" : "Tidak") . "\n\n";

echo $mahasiswa2->tampilkanInfo() . "\n";
echo "Sisa semester: " . $mahasiswa2->sisaSemester() . "\n";
echo "Status aktif: " . ($mahasiswa2->isAktif() ? "Ya" : "Tidak") . "\n";
?>
