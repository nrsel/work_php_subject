<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class Test{


    const DIRECTORY = __DIR__;

    public $a;
    //sadece sınıf içinde erişilebilir.
    private  $b;
    //sadece sınıf içinde ve kalıtılan sınıfta erişilebilir.
    protected  $c;

    public  function  getDırectory(){

        return self::DIRECTORY;
    }
}

class Test2 extends  Test{

    public function returnC(){

        return  $this->c = 'c döndür';
    }
}

  /*$nesne = new Test();
  echo $nesne->getDırectory();*/
  echo Test::DIRECTORY;

 // protected
  $nesne2 = new Test2();
  //echo $nesne2->returnC();