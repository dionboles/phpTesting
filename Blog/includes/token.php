<?php
class token {
      var $data;
    function __construct(){
        $this -> $data = bin2hex(random_bytes(32));

    }
    public function getToken(){
        return $this -> $data;
    }

}

?>