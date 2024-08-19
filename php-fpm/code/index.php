<?php

echo "Привет, GeekBrains!<br>".date("Y-m-d H:i:s") ."<br><br>";

echo "Что-то еще Я это исправил и еще исправил";

$name = "Volod";

var_dump([1,2,3,4,5]);

$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
$a = 4;
$b = 2;
echo "a = {$a}, b = {$b}\n";
[$a,$b]=[$b,$a];
echo "a = {$a}, b = {$b}\n";