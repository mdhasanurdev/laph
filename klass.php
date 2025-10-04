<?php

class Klass
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        return "Hello {$this->name}";
    }
}

$klass = new Klass("Hasan");
//$klass->name = "Hacker";
echo $klass->sayHello();
//var_dump($klass->name);