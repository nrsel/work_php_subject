<?php


interface  CR{
    //Soyut metotlar ve sabitler içerir
    //sadece public metotlar tanımlanabilir
    //aynı sınfta birden fazla interface kullanılabilir.
    public  function  create();
    public  function  read();
}

interface UD{
    public  function  delete();
    public  function  update();
}


class  Test implements CR,UD{

    public  function  create(){}
    public  function  read(){}
    public  function  delete(){}
    public  function  update(){}
}

