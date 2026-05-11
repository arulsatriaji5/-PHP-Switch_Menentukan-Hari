<?php
// 1. Mengambil data hari dan tanggal saat ini dari sistem
$hari_inggris = date('l'); // Menggunakan format 'l' untuk mendapatkan nama hari dalam bahasa Inggris
$tanggal = date('d'); // Menggunakan format 'd' untuk mendapatkan tanggal dalam format dua digit (01-31)
$bulan_angka = date('m'); // Menggunakan format 'm' untuk mendapatkan bulan dalam format dua digit (01-12)
$tahun = date('Y'); // Menggunakan format 'Y' untuk mendapatkan tahun dalam format empat digit

// 2. Membuat array untuk konversi nama hari dan bulan dari bahasa Inggris ke bahasa Indonesia
$hari = [
    'Monday' => 'Senin', 
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
];

// Array untuk konversi bulan dari angka ke nama bulan dalam bahasa Indonesia
$bulan = [
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
];

// 3. Menggunakan switch case untuk menentukan nama hari dan bulan dalam bahasa Indonesia
$hari_indo = $hari[$hari_inggris]; // Mengambil nama hari dalam bahasa Indonesia berdasarkan nama hari dalam bahasa Inggris
$bulan_indo = $bulan[$bulan_angka]; // Mengambil nama bulan dalam bahasa Indonesia berdasarkan

// 4. Menampilkan hasil dalam format "Hari ini [Nama Hari], [Tanggal] [Nama Bulan] [Tahun]"
echo "Hari ini $hari_indo, $tanggal $bulan_indo $tahun";

?>