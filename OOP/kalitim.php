<?php
//Static method kullanımı: Sınıftan bir nesne yaratmadan o methodu kullanılmasını ve bir çok nesnenin çağırılmasına olanak verir.Performansı arttırmak amacıyla kullanılır.
  /*Ancak dikkat edilmesi gereken bir kaç husu var
  1) Method içinde çağırılacak nesnelerinde başta  static olarak tanımlanması gerekir.
  2)Bu nesneler çağırılırken self veya parent kullanılır. */
class staticDeneme{
    static $filename;
    static function method($filename,$text){
        //self
        //parent
        self::$filename = $filename;

        $file = fopen($filename,'w+');//$filename isimli dosyayı aç yoksa oluştur(w+)
        fwrite($file,$text);
        fclose($file);
        return file_get_contents($filename) ;
    }

}

echo staticDeneme::method('a.txt','nursel altin');







class a{
    public   function  test(){
        return 'a:test';
    }


}
class  b extends a{

    //final: metodun,sınıfın  kalıtılmasını izin vermez.Büyük projelerde,birden çok kişiyle geliştirme yapılırken kullanılır.
      /*final */ public  function  test(){
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
//print_r($nesne->testleriGetir());