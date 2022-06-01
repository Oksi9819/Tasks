<?php


namespace src;

use DateTime;
use DateTimeZone;
use Exception;

class Task2
{
    private $date;

    /**
     * @throws Exception
     */
    public function __construct(string $date)
    {
        $this->setDate($date);
    }


    /**
     * @throws Exception
     */
    public function setDate(string $date): void
    {
        if(!DateTime::createFromFormat('d.m.Y', $date))
        {
            throw new Exception('Необходима дата в формате DD.MM.YYYY.');
        }else $v=DateTime::createFromFormat('d.m.Y', $date);
        if (!($v->format('d.m.Y')==$date))
        {
            throw new Exception('Необходимо, чтобы дата соответствовала григорианскому календарю.');
        }else  $today=new DateTime( "now", new DateTimeZone('Europe/Minsk'));
        if ($today->format('Y') > $v->format('Y'))
        {
            $this->date=DateTime::createFromFormat('d.m.Y', $date);
        }elseif ($today->format('Y') == $v->format('Y'))
        {
            if ($today->format('n') > $v->format('n'))
            {
                $this->date=DateTime::createFromFormat('d.m.Y', $date);
            }elseif ($today->format('n') == $v->format('n'))
            {
                if ($today->format('j') > $v->format('j'))
                {
                    $this->date=DateTime::createFromFormat('d.m.Y', $date);
                }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
            }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
        }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
    }

    /**
     * @return DateTime|false
     */
    public function getDate():DateTime
    {
        return $this->date;
    }

    /**
     * @throws Exception
     */
    public function main():int
    {
        $today=new DateTime( "now", new DateTimeZone('Europe/Minsk'));
        $birthday=$this->date;
        echo $birthday->format('d.m.Y')."       ";
        echo $today->format('d.m.Y')."       ";
        $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));
        if ($today->format('n') > $birthday->format('n') || ($today->format('n') == $birthday->format('n') && $today->format('J') > $birthday->format('j')))
        {
            $birthday->modify('+1 year');
        }
        $diff = $today->diff($birthday);
        return $diff->days;
    }
}