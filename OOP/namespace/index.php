<?php

//namesapce i rumuz gibi düşünebiliriz.Aynı isimde sınıfları ayırt etmek için kullanıyoruz.


require  __DIR__.'./app/controller.php';
require  __DIR__.'./helper/tools.php';

//use App\Controller\VideoSinif ve ya use App\Controller\VideoSinif as Controller şeklindede kullanılabilir  ;


use Helper\tools\VideoSinif as Helper;
$nesne = new Helper;
echo $nesne->show();