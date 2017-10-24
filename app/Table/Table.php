<?php 
namespace App\Table;
use App\App;

class Table {

	protected static $table;

    public static function query($statement,$params=null,$one=false){
           if($params){
              return App::getDb()->prepare($statement,$params,get_called_class(),$one);
           } else {
              return App::getDb()->query($statement,get_called_class(),$one);
           }
       
    }
	
    public static function all(){
          return static::query("select * from ".static::$table." ");
    }

    public static function find($id){
          return static::query("select * from ".static::$table." where id= ?",[$id],true);
    }

  public function __get($key){
     $method='get'.ucfirst($key);
     $this->$key=$this->$method();
     return $this->$key;
    }


}
