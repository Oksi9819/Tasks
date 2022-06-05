<?php


namespace src;


use Exception;

class Task7
{
    /**
     * @throws Exception
     */
    public function main(array $arr, int $position):void
    {
        if($position<count($arr)+1 && $position>0)
        {
            for ($i=$position-1; $i<count($arr)-$position+1; $i++)
            {
                $arr[$i+1]=$arr[$i+2];
            }
            unset($arr[count($arr)-1]);
            echo "$arr = [";
            for ($i=0; $i<count($arr)-1; $i++)
            {
                echo $arr[$i].", ";
            }
            echo $arr[count($arr)-1]."];";
            print_r($arr);
        }else throw new Exception("Значение позиции элемента не может быть больше кол-ва элементов и меньше 1.");
    }
}
