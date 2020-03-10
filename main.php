<?php
require 'autoload.php';
$cowCount = 10; //Количество коров
$chickenCount = 20; //Количество кур

$cowboy = new Cowboy();
$cows = $cowboy->collectAnimal('Cow', $cowCount); // Ковбой собирает коров вместе
$сhickens = $cowboy->collectAnimal('Chicken', $chickenCount); // Ковбой собирает кур вместе

$Crib = new Crib($cows, $сhickens); // Помещаем коров и кур в хлев
$Milk = $Crib->collectMilk(); // Собираем молоко
$Eggs = $Crib->collectEggs(); // Собираем яйца
print('Собрано молока '.$Milk.' л.'.PHP_EOL);
print('Собрано яиц '.$Eggs.' шт.'.PHP_EOL);