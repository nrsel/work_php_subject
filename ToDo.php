<?php

//Yapılacak,Yapıldı,yapılıyor,Tarih nesnelerini ekle
//Bunlara ait metot oluştur.

class ToDo{



    public  $todo;
    public  $todowill;
    public  $done;
    public  $date;
    const DATE = '10.03.2020';


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

 $nesne  = new Todo();

 $nesne->todo = 'Kitap okunacak';

 echo $nesne->todomethod($nesne->todo);





