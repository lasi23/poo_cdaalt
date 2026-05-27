<?php

namespace App\Entity;

class Category
{
    //Attributes
    private int $id;
    private string $name;

    //Constructor (valeur obligatoire)
    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

    //Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    //toString
    public function __toString(): string
    {
        return $this->name;
    }
}