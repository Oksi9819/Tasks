<?php


namespace src;


use Exception;

class Task1
{
private $number;

    public function __construct($number)
    {
        $this->setNumber($number);
    }

    public function getNumber():int
    {
        return $this->number;
    }

    /**
     * @throws Exception
     */
    public function setNumber($number):void
    {
        if (is_int($number))
        {
            $this->number = $number;
        }else throw new Exception('Неподходящий тип. Необходимо число.');
    }

    public function main():string
    {
        return $this->number>30
            ? "More than 30"
            : ($this->number>20
            ? "More than 20"
            : ($this->number>10
            ? "More than 10"
            : "Less than 10"));
    }
}
