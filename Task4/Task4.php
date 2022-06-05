<?php

namespace src;


use Exception;

class Task4
{
    /**
     * @throws Exception
     */
    public function main(string $str): string
    {
        $str = trim($str);
        $del = ['_', '-', ' '];
        if (strpos($str, $del[0]) !== false || strpos($str, $del[1]) !== false || strpos($str, $del[2]) !== false)
        {
            $del = ['_', '-', ' '];
            $str = ucwords(str_replace($del, ' ', $str), ' ');
            return str_replace(' ', '', $str);
        } else throw new Exception('Строка должна содержать один из символов "_", "-", " "');
    }
}