<?php
$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80; 

$apakahNilaiHarianBagus = $nilaiHarian >= 70;
$apakahNilaiUtsBagus = $nilaiUts >= 80;
$apakahNilaiAkhirBagus = $nilaiAkhir >= 80;

$hasil1 = $apakahNilaiHarianBagus && $apakahNilaiUtsBagus;
$hasil2 = $apakahNilaiUtsBagus && $apakahNilaiAkhirBagus;

var_dump($hasil1);
var_dump($hasil2);
?>