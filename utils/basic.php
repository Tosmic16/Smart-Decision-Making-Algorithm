<?php
class Basic{

    public static function redirect(string $url){
      $url = "http://".$_SERVER['HTTP_HOST']."/img/SMART%20model".$url;
        

 header('location:'. $url);
    }
}

?>