<?php



//md5 i kullanabiliiriz

$sifre = 'pass123';

/*$md_pass = md5($sifre);
echo $md_pass;
if($md_pass == md5($sifre)){
    echo 'eşleşti';
}*/

//Fakat md5 şifrelerini de kırmak kolay
//php password_hash() metodunu kullanacağız;Her seferinde oluşturduğu şifreyi yenileyecek

$pass_hash = password_hash($sifre,PASSWORD_DEFAULT);

//oluşturduğumuz şifreyle eşleştirme yapalım

if(password_verify($pass_hash,$sifre)){
    
}
