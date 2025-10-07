<?php

// ===================================================================
// LATIHAN FUNGSI PHP - SOLUSI LENGKAP
// ===================================================================

echo "<h1>Solusi Latihan Fungsi PHP</h1>";

// -------------------------------------------------------------------
// TUGAS 1: Menentukan Bilangan Terbesar
// ------------------------------------------------------------------

echo "<h2>Tugas 1: Menentukan Bilangan Terbesar</h2>";

/**
 * Fungsi untuk mencari bilangan terbesar dari dua bilangan.
 * Menggunakan fungsi bawaan PHP max() yang lebih efisien dan andal.
 * @param int|float $bil1 Bilangan pertama.
 * @param int|float $bil2 Bilangan kedua.
 * @return int|float Bilangan yang lebih besar.
 */
function cariBilanganTerbesar($bil1, $bil2) {
    return max($bil1, $bil2);
}

$angka1 = 100;
$angka2 = 150;
$hasil_terbesar = cariBilanganTerbesar($angka1, $angka2);

echo "Antara $angka1 dan $angka2, bilangan terbesarnya adalah: <strong>$hasil_terbesar</strong><br>";
echo "<hr>";


// -------------------------------------------------------------------
// TUGAS 2: Menampilkan Tanggal dengan getdate()
// -------------------------------------------------------------------

echo "<h2>Tugas 2: Menampilkan Tanggal dengan getdate() (Format: dd-mm-yyyy)</h2>";

// Panggil getdate() untuk mendapatkan array informasi tanggal
$info_tanggal = getdate();

// Ekstrak komponen yang diperlukan
$hari_getdate = $info_tanggal['mday'];
$bulan_getdate = $info_tanggal['mon'];
$tahun_getdate = $info_tanggal['year'];

// Format hari dan bulan agar selalu 2 digit (misal: 07, 09)
$hari_formatted = str_pad($hari_getdate, 2, "0", STR_PAD_LEFT);
$bulan_formatted = str_pad($bulan_getdate, 2, "0", STR_PAD_LEFT);

// Gabungkan menjadi satu string
$tanggal_lengkap_getdate = $hari_formatted. "-". $bulan_formatted. "-". $tahun_getdate;

echo "Tanggal hari ini menurut getdate() adalah: <strong>$tanggal_lengkap_getdate</strong><br>";
echo "<hr>";


// -------------------------------------------------------------------
// TUGAS 3: Menampilkan Tanggal dengan date()
// -------------------------------------------------------------------

echo "<h2>Tugas 3: Menampilkan Tanggal dengan date() (Format: d-F-Y)</h2>";

// Panggil fungsi date() dengan string format yang sesuai
$tanggal_lengkap_date = date('d-F-Y');

echo "Tanggal hari ini menurut date() adalah: <strong>$tanggal_lengkap_date</strong><br>";
echo "<hr>";

?>