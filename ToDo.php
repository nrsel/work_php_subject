<?php

//Yapılacak,Yapıldı,yapılıyor,Tarih nesnelerini ekle
//Bunlara ait metot oluştur.

class ToDo{
    public  $todo;
    public  $todowill;
    public  $done;
    public  $date;
    public $db;
    const DATE = '10.03.2020';


    //Sınıf ilk oluşturulduğunda oluşturulacak metot

    public function __construct($host,$kadi,$pass)
    {
       $this->db = new PDO('mysql:host='.$host,$kadi,$pass);

    }

    public function __destruct()
    {
         $this->db = null;
    }


    public function  todomethod($todo){

        $this->todo = $todo.'('.self::DATE.')';
        return $this->todo;
    }


    public function  todowillmethod($todowill){

        $this->todowill = $todowill;
        return $todowill ;
    }
    public function  donemethod($done){

        $this->done = $done;
        return $done;
    }
}

//constructor parametre verilecek şekilde oluşturuldu. İlk nesne oluşturulduğunda parametre vermek zorundayız.
 $nesne  = new Todo('localhost','root','');

 $nesne->todo = 'Kitap okunacak';

 echo $nesne->todomethod($nesne->todo);





