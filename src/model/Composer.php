<?php
namespace APP\Model;
class Composer {
    public string $name;

    public function __construct(
        string $name,
    )
    {
        $this->name= $name;
    }
}