<?php
$x=25.1;
echo $x. "<br>";
$y=50;
$z="john";
$txt="school";
echo "i love" . $txt . "!". "<br>";
echo $x + $y. "<br>";
var_dump($x). "<br>";
echo "<br>" . $z . "<br>";
$v = 10; // global scope
echo "<p>Variable x outside function is: $v</p>";
$u = 25; // local scope
echo "<p>Variable y outside function is: $u</p>";
$t = 30; // static scope
echo "<p>Variable z outside function is: $t</p>";
