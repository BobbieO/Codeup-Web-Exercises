<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        //prepared statements to ensure data security
        $stmt = self::$dbc->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

        //'iterate' through all the attributes to build the prepared query
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);

        $result = $stmt->execute();
        

        //After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        if($result) {
            $this->attributes['id'] = self::$dbc->lastInsertId();
        }
    }

    /** Update existing entry in the database */
    protected function update()
    {
        //prepared statements to ensure data security
        $stmt = self::$dbc->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');
        
        //'iterate' through all the attributes to build the prepared query
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);

        $stmt->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        //select statement using prepared statements
        $stmt = self::$dbc->prepare('SELECT * FROM users WHERE id = :id');

        //build the prepared query
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //Store the result in a variable named $result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;

        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        //return all the matching records
        $stmt = self::$dbc->prepare('SELECT * FROM users');
        $stmt->execute();

        //Store the result in a variable named $result
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

        return $result;    
    }

    public function delete()
    {
        self::dbConnect();

        //delete a matching record
        $stmt = self::$dbc->prepare('DELETE FROM users WHERE id = :id');

         //build the prepared query
        $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $stmt->execute();
    }

}
