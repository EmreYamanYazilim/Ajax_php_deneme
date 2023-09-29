<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Deneme </title>
</head>
<body>
<?php
$GelenVeri = $_GET["deger"];

$VeriTabaniBaglantisi = mysqli_connect("localhost", "root", "", "ajax_egitim");

if (!$VeriTabaniBaglantisi) {
    die("veri bağlantı hatası");
}
mysqli_select_db($VeriTabaniBaglantisi, "ajax_egitim");
mysqli_set_charset($VeriTabaniBaglantisi, "utf8");

$kayitSorgula = mysqli_fetch_assoc(mysqli_query($VeriTabaniBaglantisi, "SELECT * FROM kisiler WHERE id=$GelenVeri ORDER BY id ASC LIMIT 1"));
        $adi            = $kayitSorgula["adi"];
        $soyadi         = $kayitSorgula["soyadi"];
        $yas            = $kayitSorgula["yas"];
        $meslek         = $kayitSorgula["meslek"];
        $sehir          = $kayitSorgula["sehir"];

echo "adi : " . $adi ."<br />";
echo "soyadi : " . $soyadi ."<br />";
echo "yas : " . $yas ."<br />";
echo "meslek : " . $meslek ."<br />";
echo "sehir: " . $sehir ."<br />";

mysqli_close($VeriTabaniBaglantisi);


?>

</body>


</html>

