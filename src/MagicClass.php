<?php

namespace App;

class MagicClass
{
    public function __construct() {
        echo "Вызван метод: __construct\n";
    }

    public function __destruct() {
        echo "Вызван метод: __destruct\n";
    }

    public function __call($name, $arguments) {
        echo "Вызван метод: __call с именем '$name'\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "Вызван метод: __callStatic с именем '$name'\n";
    }

    public function __get($name) {
        echo "Вызван метод: __get с именем '$name'\n";
    }

    public function __set($name, $value) {
        echo "Вызван метод: __set с именем '$name' и значением '$value'\n";
    }

    public function __toString() {
        echo "Вызван метод: __toString\n";
        return "MagicClass object";
    }

    public function __invoke($x) {
        echo "Вызван метод: __invoke с параметром '$x'\n";
    }
}
