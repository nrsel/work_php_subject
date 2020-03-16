<?php

//xml dosyası oluşturma

header('content-type: text/xml');

$xml =new SimpleXMLElement('<user/>');

$xml->addChild('ad','Nursel');
$xml->addChild('soyad','ALTIN');
$site = $xml->addChild('site');
$site->addChild('url','http://ilhamaliyorum.com/');
$site->addChild('domain','ilhamaliyorum.com');

echo $xml->asXML();


