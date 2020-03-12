<?php


abstract class  Plugin {
    //soyut metotların gövdesi doldurulmaz kalıtılan sınıflarda doldurulacak
     abstract  public function setTitle($title);
     abstract  public  function  setContent($comment);

}


class LastContent extends Plugin{


    public function setContent($comment)
    {
        return $this->comment = $comment;
    }

    public  function  setTitle($title)
    {
       return $this->title = $title;
    }
}


class  SocialMedia extends  Plugin{
    public function setContent($comment)
    {
        return $this->comment = $comment;

    }

    public  function  setTitle($title)
    {
        return $this->title = $title;
    }
}


$content_ob = new LastContent();

echo '<h2>'.$content_ob->setTitle('İçerikler').'</h2></br>'. $content_ob->setContent('İçerikler gösterildi!').'</br></br>';

$social_ob = new LastContent();

echo '<h2>'.$social_ob->setTitle('Sosyal Medya').'</h2></br>'. $social_ob->setContent('İçerikler gösterildi!');

