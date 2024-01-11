<?php

// OPERATOR AND (&&)
// 1. NILAI 1 = TRUE, NIALI 2 = TRUE, HASIL = TRUE
// 2. NILAI 1 = TRUE, NIALI 2 = TRUE, HASIL = FALSE

// OPERATOR OR (//)
// 1. NILAI 1 = TRUE, NIALI 2 = TRUE, HASIL = TRUE
// 2. NILAI 1 = TRUE, NIALI 2 = TRUE, HASIL = TRUE

$nilaiAbsen = 80;
$nilaiAkhir = 85;

$apakahNilaiAbsenBagus = $nilaiAbsen >= 85;
$apakahNilaiAkhirBagus = $nilaiAkhir >= 85;

$hasil1 = $apakahNilaiAbsenBagus && $apakahNilaiAkhirBagus;
$hasil2 = $apakahNilaiAbsenBagus || $apakahNilaiAkhirBagus;

var_dump($hasil1);
var_dump($hasil2);
?>