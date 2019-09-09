<?php
 class DB{
     public static function connect(){
        $username = 'root';
        $password = 'root';
        $db = 'blog';
        $servername = '12.0.0.1';
        $port = 8889;
        $dsn= "mysql:host=$servername;dbname=$db; port=$port;";
        $conn = null;
        try{
            $conn =  new PDO($dsn, $username, $password);
             // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                  echo "Error: " . $e->getMessage();
                  exit;
            }
            return $conn;
       
     }
     public static function query($query,$params = array()){
         $statement = self::connect()->prepare($query);
         $statement -> execute($params);
        //  $data = $statement -> fetchAll();
        //  return $data;
     }
 }


?>