<?php

require_once ("config.php");

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PWD;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $stmt;
    private $dbconnected = false;

    public function __construct(){

        //set PDO Connection
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try{
            $this->connection = new PDO($dns, $this->user, $this->pass, $options);
            $this->dbconnected = true;
        } catch (PDOException $e){
            $this->error = $e->getMessage() . PHP_EOL;
            $this->dbconnected = false;
        }

    }

    public function getError(){
        return $this->error;
    }

    public function isConnected(){
        return $this->dbconnected;
    }

    //prepare statement with query
    public function query($query){
        $this->stmt = $this->connection->prepare($query);
    }

    //executing prepared statement
    public function execute(){
        return $this->stmt->execute();
    }

    //get results as an array of objects
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //get row count
    public function rowCount(){
        return $this->stmt->rowCount();
    }

    //get single records as object
    public function single(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //bind function
    public function bind($param, $value, $type = null){

        if (is_null($type)) {
            switch (true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

}