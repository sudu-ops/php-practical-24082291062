<?php

    echo "Write a PHP script to create associative arrays and apply sorting functions such aS asort() and ksort(). <br>";
    echo "Name : Sudarshan Agraval <br>"
    echo "Enrollment Number : 24082291062 <br>";

    $marks = array ("yash" => 85 ,"Ayush" => 80, "vatsal" => 75);

    asort ($marks);
        echo "After asort: <br>";
        foreach ($marks as $name => $mark) {
            echo "$name = $mark <br>";
        }

    ksort ($marks);
        echo "After ksort: <br>";
        foreach($marks as $name => $mark) {
            echo "$name = $mark <br>";
        }


?>
