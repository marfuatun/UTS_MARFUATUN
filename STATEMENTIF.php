<html>
<head>
<title>Statement IF</title>
</head>

<body>

<?php
echo"<form action=\"$php_self\" method=\"post\">";
$nilai1=$_POST['nilai1'];
echo "berapa nilai PHPmu? 
<input name =\"nilai\" value=\"$nilai1\" size=\"3\" type=\"text\" value=\"$nilai1\">
<input name =\"cek\" type=\"submit\" value=\"cek\"> <\form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol cek
 {   echo"<br><h1>";
     if($nilai1=="")
	 {echo"anda belum menentukan nilai...!";}
	 elseif(!is_numeric($nilai1)) //jika nilai tidak bertype numerik
	 {echo"ini bukannilai angka";}
	 else
	 {
		 if($nilai1<=30) //statement pertama
		 {echo"anda mendapat nilai huruf <b> E </b>";}
		 elseif($nilai1<=50) //statement kedua 
		  {echo"anda mendapat nilai huruf <b> D </b>";}
		 elseif($nilai1<=70) //statement ketiga 
		  {echo"anda mendapat nilai huruf <b> C </b>";}
		 elseif($nilai1<=80) //statement keempat 
		  {echo"anda mendapat nilai huruf <b> AB </b>";}
		 else         //statement kelima 
		  {echo"anda mendapat nilai huruf <b> A </b>";}
	 }
	 echo"<h1>";
 }
 ?>
</body>
</html>