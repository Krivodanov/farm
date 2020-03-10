<?php

/**
 * Корова
 */
class Cow extends Animal
{
    /**
     * В конструкторе задаем количество молока имеющегося у коровы
     */
    public function __construct()
    {
        $this->product = rand(8, 10);
    }

}