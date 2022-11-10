<?php 
if($_POST){
//Kullanıcı adı Şifre belirle
$kullanici_adi="Helvetica";
$sifre="12";

/*HTML üzerinden girilen
Kullanıcı adı şifreyi
Alalım*/
$html_kullanici_adi=$_POST["kullanici_adi"];
$html_sifre=$_POST["sifre"];
	
//kullanicinin girdiği bilgilerle
//bizim sistemimizdekilerin 
//Eşleşip eşleşmediğine bakalım
if($html_kullanici_adi!=$kullanici_adi)
	echo"Kullanıcı adı yanlış!";
else if($html_sifre!=$sifre)
	echo"Şifre yanlış!";
else echo"Giriş yapıldı!";
	
}
?>