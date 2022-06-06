<?php

namespace src;


use Exception;

class Task5
{
    /**
     * @throws Exception
     */
    public function main(int $n): float
    {
        $arr = array();
        $arr[0] = 0;
        $arr[1] = 1;
        $num = 10**($n-1);

        for ($i=2; $i<$num; $i++)
        {
            if ($arr[$i-1] + $arr[$i-2]<$num)
            {
                $arr[$i] = $arr[$i-2] + $arr[$i-1];
            }else break;
        }
        $a=count($arr)-2;
        $b=count($arr)-1;
        $arr[count($arr)] = $arr[$a] + $arr[$b];
        return end($arr);
    }
}