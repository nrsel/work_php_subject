<?php

class a{
    public   function  test(){
        return 'a:test';
    }


}
class  b extends a{

    //final: metodun,sınıfın  kalıtılmasını izin vermez.Büyük projelerde,birden çok kişiyle geliştirme yapılırken kullanılır.
      final public  function  test(){
            return 'b:test';
         }
}

class  c  extends  b{
    public  function  test(){
        return 'c:test';
    }

    public  function testleriGetir(){

        return $dizi = [
            'c =>'  => $this->test(),//self->test(),
            'b =>'  => parent::test(),//parent:kalıtılan sınıftaki metodu kullan
            'a =>'  => a::test(),

        ];

    }
}



$nesne  = new  c();
print_r($nesne->testleriGetir());