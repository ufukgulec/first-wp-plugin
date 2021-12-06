<?php
//$_GET
echo "Hoşgeldin, " . $_POST["name"] . " " . $_POST["surname"] . " Get ile çektim";
echo "<br/>";
echo "Hoşgeldin, " . $_REQUEST["isim"] . " " . $_REQUEST["soyisim"] . " Request ile çektim";
echo "<br/>";
$dosya = $_FILES["filee"];

echo "<pre>";
print_r($dosya);
echo "</pre>";
echo "<br/>";

echo "Gelen Dosya adı: " . $_FILES["filee"]["name"];
?>