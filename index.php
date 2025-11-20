<?php

require 'vendor/autoload.php';

use App\MagicClass;

echo "1. __construct (создание объекта):\n";
$obj = new MagicClass();
echo "\n";

echo "2. __set и __get (работа со свойствами):\n";
$obj->testProperty = 'test value';
$value = $obj->testProperty;
echo "\n";

echo "3. __call (вызов несуществующего метода):\n";
$obj->undefinedMethod('parameter');
echo "\n";

echo "4. __callStatic (вызов несуществующего статического метода):\n";
MagicClass::staticUndefinedMethod('param');
echo "\n";

echo "5. __toString (преобразование в строку):\n";
echo "Объект как строка: " . $obj . "\n";
echo "\n";

echo "6. __invoke (вызов объекта как функцию):\n";
$obj('invoke parameter');
echo "\n";

echo "7. __destruct (уничтожение объекта):\n";
unset($obj);
echo "\n";
