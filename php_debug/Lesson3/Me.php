<?php
namespace Me;

class Me
{
    private $name;
    private $choice;

    public function __construct($lastName, $firstName, $choice)
    {
        $this -> name       = $lastName.$firstName;
        $this -> choice     = $choice;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function getChoice()
    {
        return $this -> choice;
    }
}
