<?php

class Database{

    //define a variable
    public $dbConnection;
    public $records;

    //function to open the connection with the database
    function openConnection(): bool {}

    //fetch records from the database
    function fetchRecords($id): array{}

    //insert records
    function insertRecords($data): bool{}

    //update records
    function updateRecords($id, $data): bool{}

    //delete records
    function deleteRecords($id): bool{}
}
