<?php


namespace src;


class Task3
{
    public function main(int $number):int
    {
        if ($number <> 0)
        {
            if ($number < 0)
            {
                $number*=(-1);
            }
            return ($number - 1) % 9 + 1;
        }else return 0;
    }
}

