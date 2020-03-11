<?php
define('COW_COUNT', 10);
define('CHICKEN_COUNT', 20);
require 'autoload.php';

$Crib = new Crib();
$Crib->enterAnimals(Cow::class, COW_COUNT); // Помещаем коров в хлев
$Crib->enterAnimals(Chicken::class, CHICKEN_COUNT); // Помещаем кур в хлев
$products = $Crib->collectProducts(); // Собираем продукты
print('Собрано молока '.$products[Cow::class].' л.'.PHP_EOL);
print('Собрано яиц '.$products[Chicken::class].' шт.'.PHP_EOL);