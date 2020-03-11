<?php

/**
 * Class Sheep
 */
class Sheep extends Animal
{
    /**
     * В конструкторе задаем количество шерсти имеющегося у овцы
     * @param $regNumber регистрациооный номер животного
     * @throws Exception
     */
    public function __construct($regNumber)
    {
        if(!is_int($regNumber)) throw new Exception('Ошибка: Регистрационный номер животного должен быть целым числом!');
        $this->regNumber = $regNumber;
        $this->product = rand(1, 3);
    }
}