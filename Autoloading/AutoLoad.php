<?php

namespace Autoloading;

spl_autoload_register(function ($classname){
    echo "Loading the class: $classname <br>";
    require_once("$classname.php");
});

$file1 = new Files();
$file1->hello();

$db1 = new Database();
$db1->hello();