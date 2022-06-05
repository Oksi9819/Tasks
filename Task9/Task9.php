<?php


namespace src;


use Exception;

class Task9
{
    /**
     * @throws Exception
     */
    public function main(array $arr, int $number): void
    {
        $b=[];
        for ($i = 0; $i < count($arr); $i++)
        {
            if (is_int($arr[$i]))
            {
                array_push($b, $arr[$i]);
            }
        }
        if (count($arr)===count($b))
        {
            $result=[];
            for ($i = 0; $i < count($arr) - 2; $i++) {
                if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                    array_push($result, "$arr[$i] + {$arr[$i+1]} + {$arr[$i+2]} = $number");
                }
            }
            print_r($result);
        }else throw new Exception('Массив может состоять только из целых чисел');
    }
}
