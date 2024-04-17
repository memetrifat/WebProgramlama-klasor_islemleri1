<html>
    <body>
<?php
/*
@mkdir("Resimler");
@mkdir("Resimler/profil52");
@mkdir("../profil52");
//rmdir("Resimler/profil52");
//rmdir("Resimler");
//rmdir("../profil52");
$klasor = opendir("Resimler");
while($dosya = readdir($klasor)){
 if (!is_dir($dosya)){
 echo $dosya.'<br>';
 }
}
*/
/*
$profilAdi="AMP11A";
$yil="2024";
mkdir("Aylar");
mkdir("Aylar/".$profilAdi);
mkdir("Aylar/".$profilAdi."/".$yil);
$aylar=["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz" , "Ağutos", "Eylül","Ekim","Kasım","Aralık"];
for($i=0;$i<12;$i++){
 $url="Aylar/".$profilAdi."/".$yil."/".$aylar[$i];
 mkdir($url);
}
*/
require_once("ekle_sil.php"); // Sayfa içeri aktarıldı.
require_once("listele.php");
klasor_ekle("Kayitlar");
klasor_ekle("Kayitlar/Yasir");
klasor_ekle("Kayitlar/Selman");
klasor_listele("Kayitlar");
//klasor_sil("Kayitlar/Yasir");
//klasor_sil("Kayitlar/Selman");
?>
    </body>
</html>