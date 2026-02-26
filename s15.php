<?php
echo "Definition Name ---<br><br>";
echo "15. Write a PHP script to demonstrate polymorphism using method overriding in PHP.<br><br>";
echo "Name : Sudarshan Agraval <br>";
echo "Enrollment Number : 24082291062 <br>";
echo "------------------------------------------<br><br>";
class Shape
{
    function draw()
    {
        echo "Drawing Shape<br>";
    }
}

class Circle extends Shape
{
    function draw()
    {
        echo "Drawing Circle<br>";
    }
}

class Rectangle extends Shape
{
    function draw()
    {
        echo "Drawing Rectangle<br>";
    }
}

$s1 = new Circle();
$s1->draw();

$s2 = new Rectangle();
$s2->draw();
?>
