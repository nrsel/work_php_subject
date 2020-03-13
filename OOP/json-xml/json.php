<?php

//json formatındaki dosyayı çağrıyoruz.
$test=file_get_contents('test.json');

//verileri dizi olarak döndür diyoeuz.2.parametreye true yazmazsak obje olarak döndürücek
$dizi = json_decode($test,true);

//echo $test;
//print_r($dizi);

//------------------------------------------------------------------------------------

//verileri json formatına dönüştürme

 $user = [
     "ad" =>"Nursel",
     "soyad" =>"ALTIN",
     "web site" =>[
         [
             "url" =>"http://ilhamaliyorum.com/"
         ],
         [
             "domain" =>"ilhamaliyorum.com"
         ]
     ]
 ];

 echo json_encode($user);
