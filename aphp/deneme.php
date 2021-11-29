<?php 
// Zaman için kullanacağımız dili ifade ediyoruz
setlocale(LC_TIME, 'tr_TR');
 
// Şu şekilde de olabilir
// setlocale(LC_TIME, 'tr_TR.UTF-8');
 
// İstediğimiz biçimde ve belirttiğimiz dilde tarihi yazdırıyoruz
echo strftime('%e %B %Y %A %H:%M:%S');
// Örnek Sonuç: 3 Ağustos 2013 Cumartesi 02:05:42

$gunler = array(
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
);
 
$aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
);
 
$ay = $aylar[date('m') - 1];
$gun = $gunler[date('N') - 1];
 
echo date('j ') . $ay . date(' Y ') . $gun . date(' H:i:s');
// Örnek Sonuç: 3 Ağustos 2013 Cumartesi 02:19:18
?>