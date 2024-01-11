<?php

echo "Hello World";
var_dump("Hello Dunia");
echo 123;
print_r("tes");

/// 1. HTML di dalam PHP
$nama =  "Qobli Atha Ashrori";
echo " <h1>$nama</h1>";

$matapelajaran = "Dasar-dasar RPL 2";

// 2. PHP didalam PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $matapelajaran; ?></h1>
</body>
</html>