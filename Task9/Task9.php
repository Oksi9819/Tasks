<?php


namespace src;


use Exception;

class Task9
{
    private $arrToEdit;

    /**
     * @throws Exception
     */
    public function __construct(array $arr)
    {
        $this->setArrToEdit($arr);
    }

    /**
     * @param array $arr
     * @throws Exception
     */
    public function setArrToEdit(array $arr): void
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
            $this->arrToEdit = $arr;
        }else throw new Exception('Массив может состоять только из целых чисел');
    }

    public function main(int $number): array
    {
            $arr=$this->arrToEdit;
            $result=[];
            for ($i = 0; $i < count($arr) - 2; $i++) {
                if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                    array_push($result, "$arr[$i] + {$arr[$i+1]} + {$arr[$i+2]} = $number");
                }
            }
            return $result;
    }
}

try {
    $test = new Task9([2, 7, 7, 1, 8, 2, 7, 8, 7]);
    print_r($test->main(16));
} catch (Exception $e) {echo $e->getMessage()."\n";}
