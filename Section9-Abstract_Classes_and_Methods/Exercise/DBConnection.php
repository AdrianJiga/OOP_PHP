<?php

abstract class Database{

    public string $connection;
    public bool $connectionActive = false;

    abstract function setConnection($dbName);
    abstract function getConnection();
}

//by Extending the Database class now you know what methods to implement for database
class DBConnection extends Database{

    function getConnection()
    {
        if($this->connectionActive){
            return $this->connection;
        }
    }

    function setConnection($dbName)
    {
        $this->connectionActive = true;
        $this->connection = "Connection to the database handler <br>";
    }

}

$db1 = new DBConnection();
$db1->setConnection("Test");
echo $db1->getConnection();

