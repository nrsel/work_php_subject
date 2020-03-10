<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class Test{


    public $a;
    //sadece sınıf içinde erişilebilir.
    private  $b;
    //sadece sınıf içinde ve kalıtılan sınıfta erişilebilir.
    protected  $c;

}

class Test2 extends  Test{

    public function returnC(){
        
        return  $this->c = 'c döndür';
    }
}

 $nesne = new Test();
 $nesne->a = 'dneme';
 //echo  $nesne->a;

 // protected
  $nesne2 = new Test2();
  echo $nesne2->returnC();