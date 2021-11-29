<?php 
$dsn = 'mysql:host=localhost;dbname=test';
$user = 'root';
$password = '';
 
try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if($test = $db->query('SELECT * FROM test'))
{
    // Sorgu başarıyla çalışırsa üyeleri listeleriz
}
else
{
    echo 'Sorguda bir hata meydana geldi.';
    $error = $db->errorInfo();
    echo 'Hata mesajı: ' . $error[2];
}

foreach($db->query('SELECT * FROM test') as $row) {//PDO ile verileri listelemek
    echo $row['kadi'] . '<br/>';
}
$row = $db->query('SELECT * FROM test WHERE id = 1')->fetch();//PDO ile 1. ıd deki kadi'yi ekrana çekiyor.
echo $row['kadi'];

if($db->exec('INSERT INTO test (kadi) VALUES ("buraya ne yazılırsa kadi ya gidecek")'))//her f5 cektigimizde yeni bir kadi  yazdırıyoruz phpmyadmine.
{
    $id = $db->lastInsertId();
    echo 'Yeni eklenen üyenin IDsi: ' . $id;
}
else
{
    echo 'Yeni kayıt eklerken bir hata meydana geldi.';
}
?>