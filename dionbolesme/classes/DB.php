<?php
class DB{
    private static $_instance = null;
    private $_pdo,
            $_query,
            $_error = false , 
            $_results,
            $_count = 0;
    private function __construct() {
        try{
            $this->_pdo = new PDO("mysql:host=".Config::get('mysql/host').";dbname=".Config::get('mysql/db').";port=".Config::get('mysql/port').";",Config::get('mysql/username') , Config::get('mysql/password'));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function getInstance(){
       if(!isset(self::$_instance)){
           self::$_instance = new DB();
       }
       return self::$_instance;
    }
    public function query($sql, $params = array()){
        $this -> _error = false;
        if($this->_query=$this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
                foreach($params as $param){
                    $this->_query->bindValue($x,$param);
                    $x++;
                }
            }
            if($this->_query->execute()){
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            }else{
                $this->_error=true;
            }
        }
        return $this;
        
    }
    public function action($action,$table,$where=array()){
        if(count($where) == 3){
            $opertors = array('=','>','<','<=');
            $field = $where[0];
            $opertor = $where[1];
            $value = $where[2];
            if(in_array($opertor,$opertors)){
                $sql = "{$action} FROM {$table} WHERE {$field} {$opertor} ?";
                if($this->query($sql,array($value))){
                    return $this;
                }
            }
        }
        return false;
    }
    public function get($table,$where){
        return $this->action("SELECT *",$table,$where);
    }
    public function delete(){

    }
    public function error(){
        return $this->_error;
    }
}