<?php
echo "Definition Name ---<br><br>";
echo "16. Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.<br><br>";
echo "Name : Sudarshan Agraval<br>";
echo "Enrollment Number : 24082291062 <br>";
echo "-------------------------------- ----------<br><br>";
class Student
{
    private $name;
    private $marks;

    public function setData($n, $m)
    {
        $this->name = $n;
        $this->marks = $m;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMarks()
    {
        return $this->marks;
    }
}

$s1 = new Student();
$s1-> setData ("Sandhya");

echo "Name = " . $s1->getName() . "<br>";
echo "Marks = " . $s1->getMarks();
?>
