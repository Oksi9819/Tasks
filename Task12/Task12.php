<?php


namespace src;


use Exception;

class Task12
{

    private $first;
    private $second;
    static $res;

    /**
     * @throws Exception
     */
    public function __construct($first, $second) {
        if (is_int($first) == 'false' OR is_int($second) == 'false' OR is_float($first) == 'false' OR is_float($second)=='false')
        {
            throw new Exception('Неверный формат чисел.');
        }else {
        $this->first = $first;
        $this->second = $second;
        self::$res=0;
        }
    }

    /**
     * @throws Exception
     */
    public function add(): string
    {
        $args = func_num_args();
        if ($args == 0) {
            self::$res = $this->first + $this->second;
            return self::$res;
        }elseif ($args == 1) {
            $arg = func_get_arg(0);
            if (is_int($arg)=='false' || is_float($arg)=='false')
            {
                throw new Exception('Аргументом фунции может быть только число.');
            }else {
                Task12::$res+=$arg;
                return Task12::$res;
            }
        }else throw new Exception('У функции может быть максимум один аргумент.');
    }

    /**
     * @throws Exception
     */
    public function subtract():string
    {
        $args = func_num_args();
        if ($args == 0) {
            self::$res = $this->first - $this->second;
            return self::$res;
        }elseif ($args == 1) {
            $arg = func_get_arg(0);
            if (is_int($arg)=='false' || is_float($arg)=='false')
            {
                throw new Exception('Аргументом фунции может быть только число.');
            }else {
                Task12::$res-=$arg;
                return Task12::$res;
            }
        }else throw new Exception('У функции может быть максимум один аргумент.');
    }

    /**
     * @throws Exception
     */
    public function multiply(): string
    {
        $args = func_num_args();
        if ($args == 0) {
            self::$res = $this->first * $this->second;
            return self::$res;
        }elseif ($args == 1) {
            $arg = func_get_arg(0);
            if (is_int($arg)=='false' || is_float($arg)=='false')
            {
                throw new Exception('Аргументом фунции может быть только число.');
            }else {
                Task12::$res*=$arg;
                return Task12::$res;
            }
        }else throw new Exception('У функции может быть максимум один аргумент.');
    }

    /**
     * @throws Exception
     */
    public function divide():string
    {
        $args = func_num_args();
        if ($args == 0) {
            if ($this->second !== 0)
            {
                self::$res = $this->first / $this->second;
                return self::$res;
            }else throw new Exception('На ноль делить нельзя.');
        }elseif ($args == 1) {
            $arg = func_get_arg(0);
            if (is_int($arg)=='false' || is_float($arg)=='false')
            {
                throw new Exception('Аргументом фунции может быть только число.');
            }elseif ($arg !== 0) {
                Task12::$res/=$arg;
                return Task12::$res;
            }else throw new Exception('На ноль делить нельзя.');
        }else throw new Exception('У функции может быть максимум один аргумент.');
    }
}