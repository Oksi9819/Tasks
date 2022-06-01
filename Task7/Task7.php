<?php


namespace src;


use Exception;

class Task7
{
    private $arrToEdit = array();

    public function __construct(array $arrToEdit)
    {
        $this->setArrToEdit($arrToEdit);
    }

    /**
     * @param array $arrToEdit
     */
    public function setArrToEdit(array $arrToEdit): void
    {
        $this->arrToEdit = $arrToEdit;
    }

    /**
     * @throws Exception
     */
    public function main(int $position):void
    {
        if($position<count($this->arrToEdit)+1 && $position>0)
        {
            for ($i=$position-1; $i<count($this->arrToEdit)-$position+1; $i++)
            {
                $this->arrToEdit[$i] = $this->arrToEdit[$i+1];
                $this->arrToEdit[$i+1]=$this->arrToEdit[$i+2];
            }
            unset($this->arrToEdit[count($this->arrToEdit)-1]);
        }else throw new Exception("Значение позиции элемента не может быть больше кол-ва элементов и меньше 1.");
    }
}
