<?php

/**
 * Курица
 */
class Chicken extends Animal
{
    /**
     * В конструкторе задаем количество яиц имеющихся у курицы
     * @param $regNumber регистрациооный номер животного
     */
    public function __construct($regNumber)
    {
        $this->regNumber = $regNumber;
        $this->product = rand(0, 1);
    }
}