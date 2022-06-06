<?php


namespace src;


use Exception;

class Task1
{
    public function main($number):string
    {
        return $number>30
            ? "More than 30"
            : ($number>20
            ? "More than 20"
            : ($number>10
            ? "More than 10"
            : "Less than 10"));
    }
}
