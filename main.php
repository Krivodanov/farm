<?php
require 'autoload.php';

// Массив видов животных
$animals = [];
$animals[Cow::class] = ['count'=>10, 'nameProduct'=>'Молоко'];
$animals[Chicken::class] = ['count'=>20, 'nameProduct'=>'Яйцо'];
$animals[Sheep::class] = ['count'=>12, 'nameProduct'=>'Шерсть'];

$Crib = new Crib();
// Помещаем животных в хлев
foreach ($animals as $animalClass=>$animal) {
    $Crib->enterAnimals($animalClass, $animal['count']);
}
// Собираем продукты
$Crib->collectProducts();
// Отображение результатов сбора продуктов
$Crib->showProducts($animals);
