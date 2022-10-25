<?php

namespace Dicky\ComposerLibrary;

class Customer {

    public function __construct(private string $nama)
    {

    }

    public function sayHello(string $nama = "Guest"): string
    {
        return "Hello $nama, Saya  $this->nama " . PHP_EOL;
    }
}