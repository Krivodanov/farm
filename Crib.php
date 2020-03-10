<?php

/**
 * Хлев
 */
class Crib
{
    private $cows;
    private $chickens;
    private $product;

    public function __construct($cows, $chickens)
    {
        $this->cows = $cows;
        $this->chickens = $chickens;
    }

    /**
     * Метод сбора молока со всех коров в хлеву
     * @return int количество молока
     */
    public function collectMilk ()
    {
        return $this->collect($this->cows);
    }

    /**
     * Метод сбора яиц со всех кур в хлеву
     * @return int количество яиц
     */
    public function collectEggs()
    {
        return $this->collect($this->chickens);
    }

    /**
     * Метод сбора продуктов со стада животных
     * @param $herd стадо животных
     * @return int количество собранного продукта
     */
    private function collect($herd)
    {
        $this->product = 0;
        foreach ($herd as $animal) {
            $this->product += $animal->getResource();
        }
        return $this->product;
    }

}