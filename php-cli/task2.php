<?php
$a = 5;
$b = '05';
var_dump($a == $b);// true строка переменная $b неявно приводится к int. не строгое сравнение
var_dump((int)'012345');// 12345 происходит явное преобразование строки к int
var_dump((float)123.0 === (int)123.0);// false  строгое сравнение
var_dump(0 == 'hello, world'); // false  строка не может быть пеобразованна к числу

//task3
var_dump(0 == 'hello, world'); // в версии 7.4 будет true  в этой версии текст приводится к нулю поэтому они true

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task2.php