<?php

    echo "Write a PHP script to demonstrate multiple inheritance using traits. <br>";
    echo "Name : Sudarshan Agraval<br>";
    echo "Enrollment Number : 24082291062 <br>";

    trait TraitA {
        public function messageA () {
            echo "Message from Trait A <br>";
        }
    }

    trait TraitB {
        public function messageB () {
            echo "Message from Trait B <br>";
        }
    }

    class MyClass {
        Use TraitA, TraitB;
    }

    $obj = new MyClass ();
    $obj -> messageA ();
    $obj -> messageB ();

?>
