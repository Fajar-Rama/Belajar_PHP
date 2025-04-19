<?php
$x=10/*+20*/+25;
echo $x;
$y=50;
$z="john";
$txt="school";
echo "i love" . $txt . "!";
echo $x + $y;
var_dump($x);
echo $z;
$v = 10; // global scope
echo "<p>Variable x outside function is: $v</p>";
$u = 25; // local scope
echo "<p>Variable y outside function is: $u</p>";
$t = 30; // static scope
echo "<p>Variable z outside function is: $t</p>";
