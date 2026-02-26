<?php

    echo "Write a PHP script to demonstrate the use of constructor and destructor in PHP. <br>";
    echo "Name : Sudarshan Agraval <br>";
    echo "Enrollment Number : 24082291062 <br>";

    class Person {
        public $name;

        function __construct ($n) {
            $this -> name = $n;
            echo "Constructor called <br>";
        }

        function __destruct () {
            echo "Destructor called <br>";
        }

        function show() {
            echo "Name:" .$this -> name. "<br>";
        }
    }

    $p1= new Person ("Sam");
    $p1-> Show();

?>
