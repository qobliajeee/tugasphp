<!-- HTML DIDALAM PHP -->
<?php 
$biodata = "=== Biodata Diri ===";
$nama = "Nama Lengkap : Qobli Atha Ashrori";
$tgllahir = "Tanggal Lahir : Jakarta, 11 Agustus 2007";
$noWa = "Nomor WhatsApp : 082115558771";
$description = "Deskripsi Diri : Seorang Yang sederhana";
echo "<h1>HTML DALAM DALAM PHP</h1>";
echo "<br/>";

echo "<h1>$biodata</h1>";
echo "<hr/>";

echo "<p>$nama </p>";

echo "<p>$tgllahir</p>";

echo "<p>$noWa</p>";

echo "<p>$description</p>";

echo "<hr/>";

$judul2 = "PHP DI DALAM HTML";
?>
<!-- PHP DI DALAM HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "$judul2" ;?></h1>
    <h1><?php echo "$biodata"    ;    ?></h1>
    <p><?php echo   "$nama";  ?></p>
    <p><?php echo   "$tgllahir";  ?></p>
    <p><?php echo   "$noWa";  ?></p>
    <p><?php echo   "$description";  ?></p>

</body>
</html>