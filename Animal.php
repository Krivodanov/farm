<?php


class Animal
{
    public $product;
    public $regNumber;

    /**
     * Сеттер установки регистрационного номера животному
     * @param $regNumber
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;
    }

    /**
     * Получение продукта от животного
     * @return int
     */
    public function getResource()
    {
        return $this->product;
    }

}