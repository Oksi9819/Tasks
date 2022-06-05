<?php


namespace src;

class Task8
{
    public function main(string $json):void
    {
        $result = json_decode($json, true);
        array_walk_recursive($result,function ($value, $key)
        {
            echo "$key : $value"."\n";
        });
    }
}