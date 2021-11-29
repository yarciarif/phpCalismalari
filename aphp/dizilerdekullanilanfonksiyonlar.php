<?php 

$dizi=array(8,5,9,7,4,6);

$yazi=array("metehan","özkan","net");

echo "\$dizi dizisinde bulunan eleman sayısı : ".count($dizi);//Dizi içerisinde kaç adet eleman olduğunu ekrana yazdırıyor.

echo "<br>";

print_r($dizi);//Arraydaki indisleri olduğu gibi sıralama

echo "<br>";

sort($dizi);//Sayıları düzgün bir şekilde sıralama

print_r($dizi);

echo "<br>";

rsort($dizi);//Sayıları ters bir şekilde sıralama

print_r($dizi);

echo "<br>";

echo max($dizi);//indisler arasında En yüksek sayıyı ekrana yazıyor.

echo "<br>";

echo min($dizi);//indisler arasında En düşük sayıyı ekrana yazıyor.

echo "<br>";

echo in_array(4, $dizi);//20 diye bir değer $dizi'nin içinde olup olmadığını sorguluyor.Eğer varsa sonuç 1 olarak ekrana yazdırıyor yoksa ekrana birşey yazmıyor.

echo "<br>";

print_r($yazi);//Arraydaki indisleri olduğu gibi sıralama

echo "<br>";

echo implode("+", $dizi);//Dizi arrayın içindeki indisleri aralarına + koyarak ekrana yazdırıyor.

echo "<br>";

$veri="deneme";

echo strlen($veri);//strlen fonksiyonu bir stringin karakter sayısını verir.

echo "<br>";

$degistir="metehanozkan.com";

echo str_replace("com", "net", $degistir);//Bir string ifadedeki değeri başka bir string ile değiştirir.

echo "<br>";

$yazi1="yazıya bak yazıya";

echo strtoupper($yazi1);//strtoupper($yazi1) Hepsini büyük harf yapar.
echo "<br>";
echo strtolower($yazi1);//strtolower($yazi1) Hepsini küçük harf yapar.
echo "<br>";
echo ucfirst($yazi1);//ucfirst($yazi1) ilk harfi büyütülmüş veriyi gönderir.
echo "<br>";
echo ucwords($yazi1);//ucwords($yazi1) ilk harfleri büyük veriyi geri döndürür.

echo "<br>";

$sitem="www.metehanozkan.net ziyaret edin!";

echo wordwrap($sitem, 10, "<br>");//wordwrap fonksiyonu bir strnig ifadeyi belli karakter aralıklarında bölmeyi sağlar. Her 10 karakterde bir <hr/> kodu eklemiş olduk.
echo "<br>";

echo str_repeat("-=", 4);//Bir string ifadeyi istediğimiz kadar tekrar ettirmemizi sağlar. Biz 4 kere tekrar etsin dedik..

echo "<br>";

echo nl2br($sitem);//String ifadedeki satır sonlarının yerine <br> ekler.

echo "<br>";

$str="mete";
echo md5($str);//İleti özetini 32 haneli onaltılık bir sayı dizgesi olarak olarak döndürür. Mysql'de şifreleme olarakta kullanılıyor..

echo "<br>";

print_r(str_split("Merhaba"));//Arrayı indise göre parçalıyor.

echo "<br>";

$bir="Merhaba dünya. Güzel bir gün.";
print_r (explode(" ",$bir));//Array olarak indise göre parçalıyor.

echo "<br>";

parse_str("name=Metehan&age=20");//Dizge içindeki değişkenleri çözümler
echo $name."<br>";
echo $age;

echo "<br>";

$klm="merhaba";

echo sha1($klm);// sha1 şifreleme dili

echo "<br>";

$ltr = "Merhaba Dünya";
echo str_pad($ltr,20,".");// 20 ye kadar nokta ile bitirir.

echo "<br>";

echo str_shuffle("Merhaba Dunya");//Bir dizgenin karakterlerini devşirir. Çıktısı her f5 attıgında değişiyor..

echo "<br>";

echo str_word_count("Hello world!");//Bir dizgedeki sözcükler hakkında bilgi verir

echo "<br>";

echo strcasecmp("Hello","Merhaba");//İkil olarak güvenilir ve harf büyüklüğüne duyarsız dizge karşılaştırması yapar

echo "<br>";

echo strcspn("Hello world!","w");//Maske ile eşleşMEyen ilk parçanın uzunluğunu bulur

echo "<br>";

echo strip_tags("Merhaba <b>Dünya!</b>");//Bir dizgeden HTML ve PHP etiketlerini ayıklar

echo "<br>";
 
echo stripos("I love php, I love php too!","PHP");//Harf büyüklüğüne duyarsız olarak bir alt dizgenin ilkinin konumunu bulur

echo "<br>";

echo stripcslashes("Hello \World!");//Bir dizgeden tersbölüleri ayıklar

echo "<br>";


echo strnatcasecmp("10Hello world!","2Hello WORLD!");//"Doğal sıralama" algoritmasını kullanarak dizgeleri harf büyüklüğüne duyarsız olarak karşılaştırır

echo "<br>";

echo strnatcmp("2Hello world!","10Hello world!");//"Doğal sıralama" algoritmasını kullanarak dizgeleri karşılaştırır

echo "<br>";

echo strrev("Hello World!");//Bir dizgeyi ters çevirir

echo "<br>";

echo strrpos("I love php, I love php too!","php");//Bir dizgede bir karakterin sonuncusunu bulur

echo "<br>";

echo strspn("Hello world!","kHlleo");//Dizgenin, maskenin tam karakterleri ile eşleşen ilk parçasının uzunluğunu bulur

echo "<br>";
echo "<br>";

$string1 = "Hello world. Beautiful day today.";//Dizgeyi bir dizgeciğe göre böler
 $token = strtok($string1, " ");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }

echo "<br>";

echo strtr("Hilla Warld","ia","eo");//Belli karakterleri dönüştürür

echo "<br>";

echo substr_compare("Hello world","Hello world",0);//İki dizgenin belli bir konumdan itibaren belli uzunluktaki parçalarını bayt bayt karşılaştırır

echo "<br>";

echo substr_count("Hello world. The world is nice","world");//Bir dizge içinde belli bir alt dizgeden kaç tane bulunduğunu bulur

echo "<br>";

echo substr("Hello world",6);//Dizgenin bir kısmını döndürür 6.harfinden sonrakileri ekrana yazıyor.

echo "<br>";

$stl = "Hello World!";//Dizgenin başındaki ve sonundaki boşlukları (veya diğer karakterleri) budar
echo $stl . "<br>";
echo trim($stl,"Hed!");//Burada Hed! 4 harfi hello world! dan çıkartıp ekrana yazdırıyor.

echo "<br>";

$number = 9;
$stn = "Pekin";
vprintf("There are %u million bicycles in %s.",array($number,$stn));// Biçemli bir dizge çıktılar

echo "<br>";

?>