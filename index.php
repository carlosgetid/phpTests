<?php
//echo "Hello world by Carlos Gomez" . " - PHP is easy :)";

/*
 * Multi line
 * comment
 * 
 */

// variables
$a = 8;
$b = 3;

// operations 
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";

// if else statment
if($a % 2 == 0)
    echo $a . " is an even number";
else
    echo $a . " is an odd number";

echo "<br>";

// loops
for($i = 0; $i < 10; $i++)
{
    echo $i;
}

echo "<br>";

$j = 0;
while($j < 10)
{
    echo $j;
    $j++;
}

echo "<br>";

foreach(range(1,10) as $value)
{
    echo $value;
}