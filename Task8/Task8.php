<?php


namespace src;


use Exception;

class Task8
{
    private $json;

    /**
     * @throws Exception
     */
    public function __construct(string $json)
    {
        $this->setJson($json);
    }

    /**
     * @param mixed $json
     */
    public function setJson(string $json): void
    {
       $this->json = $json;
    }

    public function main():void
    {
        $result = json_decode($this->json, true);
        array_walk_recursive($result,function ($value, $key)
        {
            echo "$key : $value"."\n";
        });
    }
}
 $json=new Task8('{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": {"Publisher": "Little Brown"}}');
 $json->main();