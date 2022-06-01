<?php


namespace src;


class Task3
{
    private $number;

    public function __construct(int $number)
    {
        $this->setNumber($number);
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    public function main():int
    {
        if ($this->number <> 0)
        {
            if ($this->number < 0)
            {
                $this->number*=(-1);
            }
            return ($this->number - 1) % 9 + 1;
        }else return 0;
    }
}

