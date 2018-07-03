<?php

declare(strict_types = 1);

namespace  Application;


class Container
{
    private  $config;

    public function __construct(array $config)
    {
        //---------teste :
        // les clé sont des string
        // les valeur sont des objets

        $this->config = $config;
    }

    public function has(string $key) : bool
    {
        return isset($this->config[$key]);
    }

    public function get(string $key) : object
    {
        if(!$this->has($key)){
            var_dump($this->config);
            throw new \Exception("Service {$key} not found");
        }
        return $this->config[$key];
    }
}