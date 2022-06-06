<?php


namespace src;

use DateTime;
use DateTimeZone;
use Exception;

class Task2
{
    /**
     * @throws Exception
     */
    public function main($date):int
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
            $birthday=$date;
        }elseif ($today->format('Y') == $v->format('Y'))
        {
            if ($today->format('n') > $v->format('n'))
            {
                $birthday=$date;
            }elseif ($today->format('n') == $v->format('n'))
            {
                if ($today->format('j') > $v->format('j'))
                {
                    $birthday=$date;
                }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
            }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
        }else throw new Exception('Дата рождения должна быть меньше текущей даты.');
        $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));
        if ($today->format('n') > $birthday->format('n') || ($today->format('n') == $birthday->format('n') && $today->format('J') > $birthday->format('j')))
        {
            $birthday->modify('+1 year');
        }
        $diff = $today->diff($birthday);
        return $diff->days;
    }
}