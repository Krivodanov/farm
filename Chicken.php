<?php

/**
 * Курица
 */
class Chicken extends Animal
{
    /**
     * В конструкторе задаем количество яиц имеющихся у курицы
     */
    public function __construct()
    {
        $this->product = rand(0, 1);
    }
}