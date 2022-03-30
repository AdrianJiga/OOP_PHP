<?php

interface Animal {

    function makeSound();

}

class Dog implements Animal {

    public function makeSound()
    {
        echo "This is a dog. WOOF, WOOF! <br>";
    }
}

class Cat implements Animal {

    public function makeSound()
    {
        echo "This is a cat. MEOW MEOW!";
    }
}

$dog = new Dog();
$cat = new Cat();
$dog->makeSound();
$cat->makeSound();
