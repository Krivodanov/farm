<?php

/**
 * Корова
 */
class Cow extends Animal
{
    /**
     * В конструкторе задаем количество молока имеющегося у коровы
     * @param $regNumber регистрациооный номер животного
     */
    public function __construct($regNumber)
    {
        $this->regNumber = $regNumber;
        $this->product = rand(8, 10);
    }

}