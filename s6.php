<?php

    echo "Write a PHP script to demonstrate the use of while, do-while and foreach loops. <br>";
    echo "Name : Sudarshan Agraval <br>";
    echo "Enrollment Number : 24082291062 <br>";

    $i = 1;
    while ($i <= 3) {
        echo "while : $i <br>";
        $i++;
    }

    $j = 1;
    do {
        echo "Do-while : $j <br>";
        $j++;
    } while ($j <= 3);

    $fruits = array ("Apple", "Banana", "Mango");
    foreach ($fruits as $f) {
        echo "fruits : $f <br>";
    }

?>
