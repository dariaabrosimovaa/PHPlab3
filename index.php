<?php

require 'vendor/autoload.php';

use App\Point;
use App\Vector;

$T1 = new Point(2, 3);
echo "Точка T1: $T1\n";

$V1 = new Vector(3, 4);
echo "Вектор V1: $V1\n";

$V2 = new Vector(0, 0);
echo "Вектор V2: $V2\n";

$V3 = new Vector(-4, 3);
echo "Вектор V3: $V3\n\n";

echo "Длины векторов:\n";
echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n\n";

echo "Проверка перпендикулярности:\n";
echo "V3 перпендикулярен V1: " . ($V3->isPerpendicularTo($V1) ? 'Да' : 'Нет') . "\n\n";

echo "Перенос точки T1 на вектор V1:\n";
echo "До переноса: $T1\n";
$T1->move($V1->x, $V1->y);
echo "После переноса: $T1\n";
