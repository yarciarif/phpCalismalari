<?php 
session_start();//Session başlatma
$_SESSION['mesaj']='Selam Dünya!';
unset($_SESSION['mesaj']);//Session silme


session_destroy();//Tüm sessionları silmek
 ?>