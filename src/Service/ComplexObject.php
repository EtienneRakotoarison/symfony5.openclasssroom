<?php

namespace App\Service;

class ComplexObject
{
    private $foo;
    private $bar;
    private $baz;
    private $other;

    public function __construct(string $foo, string $bar, string $baz, string $other) {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->baz = $baz;
        $this->other = $other;
    }

    public function doSomething()
    {
        echo 'Hello Florian 🫡';
    }
}
