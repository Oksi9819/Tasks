<?php


namespace src;


use DateTime;
use Exception;

class Task6
{
    /**
     * @throws Exception
     */
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'):void
    {
        function counts(int $year, int $lastYear, int $month, int $lastMonth, string $day)
        {
            $format='d.m.Y';
            $arrResult=array();
            $amountResult=0;
            $start=new DateTime();
            $start->setDate($year, $month, 1);
            $end=new DateTime();
            $end->setDate($lastYear, $lastMonth, 1);
            $countMonth=$start->diff($end)->y * 12 + $start->diff($end)->m;
            for ($i=0; $i<$countMonth; $i++)
            {
                if ($start->format('l') === $day)
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

        if ($year>1979 && $year<2000)
        {
            if ($lastYear>1979 && $lastYear<2000)
            {
                if ($lastYear >= $year) {
                    if ($month>0 && $month<13)
                    {
                        if ($lastMonth>0 && $lastMonth<13)
                        {
                            if ($year == $lastYear && $lastMonth > $month) {
                                counts($year, $lastYear, $month, $lastMonth, $day);
                            }elseif ($year < $lastYear) {
                                counts($year, $lastYear, $month, $lastMonth, $day);
                            }else throw new Exception('Начальная дата должна быть более ранней, чем конечная.');
                        }else throw new Exception('Значение номера месяца может быть в диапазоне с 1 до 13.');
                    }else throw new Exception('Значение номера месяца может быть в диапазоне с 1 до 13.');
                }else throw new Exception('Конечный год не может быть меньше начального.');
            }else throw new Exception('Год должен быть от 1980 до 2000.');
        }else throw new Exception('Год должен быть от 1980 до 2000.');
    }
}