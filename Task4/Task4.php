<?php

namespace src;


use Exception;

class Task4
{
    private $stringToEdit;

    /**
     * @throws Exception
     */
    public function __construct(string $str)
    {
        $this->setStringToEdit($str);
    }

    /**
     * @return string
     */
    public function getStringToEdit(): string
    {
        return $this->stringToEdit;
    }

    /**
     * @param mixed $str
     * @throws Exception
     */
    public function setStringToEdit($str): void
    {
        $str = trim($str);
        if (strpos($str, '_') !== false || strpos($str, '-') !== false || strpos($str, ' ') !== false) {
            $this->stringToEdit = $str;
        } else throw new Exception('Строка должна содержать один из символов "_", "-", " "');
    }

    public function main(): string
    {
        $str = $this->stringToEdit;
        $a=explode('_', $str);
        for ($i=0; $i<count($a); $i++)
        {
            $a[$i]=ucfirst($a[$i]);
        }
        $str=implode($a);
        $a=explode('-', $str);
        for ($i=0; $i<count($a); $i++)
        {
            $a[$i]=ucfirst($a[$i]);
        }
        $str=implode($a);
        $a=explode(' ', $str);
        for ($i=0; $i<count($a); $i++)
        {
            $a[$i]=ucfirst($a[$i]);
        }
        return implode($a);
    }
}