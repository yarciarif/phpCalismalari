<?php 
$yazi="beNim intERnet SiTEm aRiFYArci.com.tr şemsi paşa pasajı";
echo "$yazi"."<br>";

echo strtolower($yazi)."<br>"; //metni küçük harflerle yazar..

echo strtoupper($yazi)."<br>";//metni büyük harflerle yazarr..

echo ucwords($yazi)."<br>";//metindeki kelimelerin ilk harflerini büyük harfler yazar..

echo ucfirst($yazi)."<br>";//metindeki kelimenin ilk harfini büyük harfle yazarr...


echo strlen(utf8_decode($yazi))."<br>";//metinde kac tane karakter oldugunu yazaar..

echo strstr($yazi, "SiTEm")."<br>";//metinde belirtilen kelimeden sonra metni yazar..

echo str_replace("beNim", "senin", $yazi)."<br>";//metinde istenilen kelimenin değiştirilmesii.. BUL VE DEĞİŞTİR

echo substr($yazi, 10,30);//metini istenilen karakterden sonra yazarr..
?>