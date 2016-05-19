<?php

class Model 
{
    protected $attributes = [];

    protected static $table = '';

    //magic setter to populate attrib array
    public function __set($name, $value)
    {
        //set key and value pairs
        $this->attributes[$name] = $value;
    }

    //magic getter to retrieve info
    public function __get($name)
    {
        //if key exists, return value
        if(array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        } 
        return 'no key';
    }

    //function to return table name
    public static function getTableName()
    {
        return static::$table;
    }

}


?>

