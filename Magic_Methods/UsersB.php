<?php

class UsersB {

    private $userName;

    public function __set(string $name, $value): void
    {
        $this->userName = $value;
        echo "Set method invoked <br>";
    }

    public function __construct()
    {
        $this->userName = "";
        echo "Construct method invoked <br>";
    }

    public function __get(string $name)
    {
        echo "Get method invoked <br>";
        return $this->userName;
    }

    public function __toString(): string
    {
        echo "toString method invoked <br>";
        return $this->userName;
    }

    public function __debugInfo()
    {
        echo "DebugInfo method invoked <br>";
    }

    public function __destruct()
    {
        echo "Destruct method invoked <br>";
    }


}

$user1 = new UsersB();
$user1->userName = "John Smith <br>";
echo $user1->userName;
echo $user1;
var_dump($user1);
