<?php

class a{
    public   function  test(){
        return 'a:test';
    }

}
class  b extends a{
    public  function  test(){
        return 'b:test';
     }
}

class  c  extends  b{
    public  function  test(){
        return 'c:test';
    }

    public  function testleriGetir(){

        return $dizi = [
            'c =>'  => $this->test(),
            'b =>'  => parent::test(),
            'a =>'  => a::test()

        ];

    }
}

$nesne  = new  c();

print_r($nesne->testleriGetir());