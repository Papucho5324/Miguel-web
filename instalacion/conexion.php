<?php
	$connect=new mysqli("localhost","root","","barber");
	if($connect-> connect_errno){
echo "Lo Sentimos el Sitio Web esta esperimentando problemas";
}
	$pdo = new PDO('mysql:host=localhost;dbname=barber','root','');
 ?>