<?php
// Mahasiswa.php

class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $prodi;
    public $semester;
    public $ipk;

    // Constructor untuk inisialisasi objek
    public function __construct($nama, $nim, $prodi, $semester, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->semester = $semester;
        $this->ipk = $ipk;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        return "Nama: $this->nama, NIM: $this->nim, Prodi: $this->prodi, Semester: $this->semester, IPK: $this->ipk";
    }

    // Method untuk menghitung sisa semester
    public function sisaSemester() {
        $totalSemester = 8;
        return max(0, $totalSemester - $this->semester);
    }

    // Method untuk mengecek apakah mahasiswa masih aktif
    public function isAktif() {
        return $this->semester <= 8;
    }
}
?>
