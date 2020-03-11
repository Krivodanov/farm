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
     */
    public function enterAnimals($animalClass, $count)
    {
        for ($i = 1; $i <= $count; $i++) {
            $this->animals[++$this->regNumberAnimal] = new $animalClass;
            $this->animals[$this->regNumberAnimal]->setRegNumber($this->regNumberAnimal);
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

}