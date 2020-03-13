<?php

//Sınıfları require ile tek tek  yüklemek yerine spl_autoload_register() bir seferde yükleyebiliriz.;


function autoloaderController($className){

     $classFile = __DIR__.'/app/controller/'.strtolower($className).'.php';

     if(file_exists($classFile)){

         require $classFile;
     }
};

function autoloaderView($viewName){

    $viewFile = __DIR__.'/app/view/'.$viewName.'.php';
    if (file_exists($viewFile)){

        require $viewFile;
    }
}

spl_autoload_register('autoloaderController');
spl_autoload_register('autoloaderView');

//$nesne =new Home();
//echo $nesne->test().'</br>';

//$nesne =new Homeview();
//echo $nesne->test().'</br>';



//NAMESPACE kullanarakta otomatik yükleme yapabiliriz.


function  autoloadNamespace($namespace){

    $namespace = strtolower(str_replace('\\','/',$namespace)).'.php';
    require $namespace;


}
spl_autoload_register('autoloadNamespace');


$nesne = new App\Controller\Home;
echo $nesne->test();


