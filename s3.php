<?php

    $day = "Monday";

    echo "Write a PHP script to demonstrate decision making in PHP using if-else and switch-case statements. <br>";
    echo "Name : Sudarshan Agraval <br>";
    echo "Enrollment Number : 24082291062 <br>";

    if ($day == "Monday") {
        echo "Today is Monday <br>";
    } else {
        echo "Today is not Monday <br>";
    }

    switch ($day) {
        case "Monday":
            echo "Start of week";
            break;

        case "Friday":
            echo "End of week";
            break;

        default:
            echo "Mid week";

    }

?>
