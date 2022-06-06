<?php


namespace src;


use Exception;

class Task10
{
    /**
     * @throws Exception
     */
    public function main(int $input): void
    {
        if ($input>0) {
            $result=array($input);
            while($input > 1)
            {
                if ($input % 2 === 0) {
                    $input = $input/2;
                }else{
                    $input = $input * 3 + 1;
                }
                array_push($result, $input);
            }

            print_r($result);
        }else throw new Exception('Можно использовать только положительные целые числа.');
    }
}