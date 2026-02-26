<?php

    echo "Write a PHP script to demonsrtrate the concept of class and object in PHP. <br>";
    echo "Name : Sudarshan Agraval <br>";
    echo "Enrollment Number : 24082291062 <br>";

    class Student {
        public $name;
        public $age;

        function setData ($n, $a) {
            $this -> name = $n;
            $this -> age = $a;
        }

        function display() {
            echo "Name:" .$this -> name. "<br>";
            echo "Age:" .$this -> age. "<br>";
        }
    }

    $str1 = New Student();
    $str1 -> setData ("Sudarshan" ,20);
    $str1 -> display ();

?>
