<?php

/**
 * Хлев
 */
class Crib
{
    private $animals;
    private $regNumberAnimal;
    private $products;

    /**
     * Метод добавления животных
     * @param $animalClass класс добавляемых животных
     * @param $count количество доавляемых животных
     * @throws Exception
     */
    public function enterAnimals($animalClass, $count)
    {
        if(!class_exists($animalClass)) throw new Exception('Ошибка: Класса "'.$animalClass.'" не существует!');
        if(!is_int($count) || $count<=0) throw new Exception('Ошибка: Количество животных должно быть натуральным числом!');
        for ($i = 1; $i <= $count; $i++) {
            $this->animals[++$this->regNumberAnimal] = new $animalClass($this->regNumberAnimal);
            //$this->animals[$this->regNumberAnimal]->setRegNumber($this->regNumberAnimal);
        }
    }

    /**
     * Метод сбора продуктов
     * @return array ассациативный массив продуктов по классам животных
     */
    public function collectProducts()
    {
        foreach ($this->animals as $animal) {
            $this->products[get_class($animal)] += $animal->getResource();
        }
        return $this->products;
    }

    /**
     * Метод вывода собранных продуктов
     * @param $typeAnimals массив видов животных
     * @throws Exception
     */
    public function showProducts ($typeAnimals)
    {
        if(!is_array($typeAnimals)) throw new Exception('Ошибка: Виды животных должны быть переданы в виде массива!');
        print('Собранно продуктов:'.PHP_EOL);
        foreach ($typeAnimals as $animalClass=>$animal){
            print($animal['nameProduct'].' '.$this->products[$animalClass].PHP_EOL);
        }
    }
}