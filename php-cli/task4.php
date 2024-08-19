<?php
$a = 4;
$b = 2;
echo "a = {$a}, b = {$b}\n";
[$a, $b] = [$b, $a];
echo "a = {$a}, b = {$b}\n";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a = {$a}, b = {$b}\n";
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;
echo "a = {$a}, b = {$b}\n";

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task4.php