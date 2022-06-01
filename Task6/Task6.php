<?php


namespace src;


use DateTime;
use Exception;

class Task6
{
    private $year;
    private $lastYear;
    private $month;
    private $lastMonth;
    const DAY='Monday';

    /**
     * @throws Exception
     */
    public function __construct (int $year, int $lastYear, int $month, int $lastMonth)
    {
        $this->setYear($year);
        $this->setLastYear($lastYear);
        $this->setMonth($month);
        $this->setLastMonth($lastMonth);
    }

    /**
     * @param mixed $year
     * @throws Exception
     */
    public function setYear(int $year): void
    {
        if ($year>1979 && $year<2000)
        {
            $this->year = $year;
        }else throw new Exception('Год должен быть от 1980 до 2000.');

    }

    /**
     * @param mixed $lastYear
     * @throws Exception
     */
    public function setLastYear(int $lastYear): void
    {
        if ($lastYear>1979 && $lastYear<2000)
        {
            if ($lastYear >= $this->year) {
                $this->lastYear = $lastYear;
            }else throw new Exception('Конечный год не может быть меньше начального.');
        }else throw new Exception('Год должен быть от 1980 до 2000.');
    }

    /**
     * @param mixed $month
     * @throws Exception
     */
    public function setMonth(int $month): void
    {
        if ($month>0 && $month<13)
        {
            $this->month = $month;
        }else throw new Exception('Значение номера месяца может быть в диапазоне с 1 до 13.');

    }

    /**
     * @param mixed $lastMonth
     * @throws Exception
     */
    public function setLastMonth(int $lastMonth): void
    {
        if ($lastMonth>0 && $lastMonth<13)
        {
            if ($this->year == $this->lastYear && $lastMonth > $this->month) {
                $this->lastMonth = $lastMonth;
            }elseif ($this->year < $this->lastYear) {
                $this->lastMonth = $lastMonth;
            }else throw new Exception('Начальная дата должна быть более ранней, чем конечная.');
        }else throw new Exception('Значение номера месяца может быть в диапазоне с 1 до 13.');
    }

    public function main():void
    {
        $format='d.m.Y';
        $arrResult=array();
        $ngh =Task6::DAY;
        print_r($arrResult);
        $amountResult=0;
        $start=new DateTime();
        $start->setDate($this->year, $this->month, 1);
        $end=new DateTime();
        $end->setDate($this->lastYear, $this->lastMonth, 1);
        $countMonth=$start->diff($end)->y * 12 + $start->diff($end)->m;
        for ($i=0; $i<$countMonth; $i++)
        {
            if ($start->format('l') === Task6::DAY)
            {
                array_push($arrResult, $start->format($format));
                $amountResult++;
            }
            $start->modify('+1 month');
        }
        echo "count of Mondays\n".$amountResult."\n";
        foreach ($arrResult as $value)
        {
            echo $value."\n";
        }
    }
}