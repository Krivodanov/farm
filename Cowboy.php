<?php

/**
 * Ковбой собирает животных в стадо и присваивает им номера
 */
class Cowboy
{
    private $regNumberAnimal;
    /**
     * Метод сбора животных в стадо
     * @param $typeAnimal тип животных
     * @param $count количество животных
     * @return array массив животных
     */
    public function collectAnimal($typeAnimal, $count)
    {
        for ($i = 1; $i <= $count; $i++) {
            $animals[$i] = new $typeAnimal;
            $animals[$i]->setRegNumber($this->regNumberAnimal++);
        }
        return $animals;
    }
}