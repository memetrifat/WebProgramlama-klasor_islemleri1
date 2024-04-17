<?php
function klasor_ekle($klasor_adi){ 
    if(!is_dir($klasor_adi)){ // Klasör değil ise
    mkdir($klasor_adi);
   echo "Klasör eklendi.<br>";
    }
}

   function klasor_sil($klasor_adi){
    if(is_dir($klasor_adi)){ // Klasör ise
   rmdir($klasor_adi);
   echo "Klasör silindi.<br>";
   }
   }


?>