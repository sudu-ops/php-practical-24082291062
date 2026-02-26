<?php

    echo "Write a PHP script to demonstrate inheritance and method overriding in PHP. <br>";
    echo "Name : Sudarshan Agraval <br>";
    echo "Enrollment Number : 24082291062 <br>";

    class Animal {
        public function sound() {
            echo "Animal makes a sound <br>";
        }
    }

    class Dog extends Animal {
        public function sound() {
            echo "Dog barks <br>";
        }
    }

    $animal = New Animal();
    $animal -> sound();

    $dog = New Dog();
    $dog -> sound();

?>
