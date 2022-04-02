<?php

require_once ("Database.php");
$db = new Database();
echo $db->isConnected() ? "DB Connected <br>" : "DB Not Connected <br>";

if (!$db->isConnected()){
    echo $db->getError();
    die("Unable to Connect to DB");
}

$db->query("SELECT * FROM test_oop");
echo var_dump($db->resultSet()) . "<br>";

echo "Rows: " . $db->rowCount() . "<br>";
echo var_dump($db->single()) . "<br>";

$db->query("SELECT * FROM test_oop WHERE id = :id");
$db->bind(':id', 1);
echo var_dump($db->single()) . "<br>";


