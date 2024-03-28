<?php

namespace APP\Model;

class Animal
{
    // Propriedades
    private string $name;
    private string $color;
    private float $height;
    private string $address;
    private bool $isActive;

    public function __construct(
        // Atributos/objetos
        string $name,
        string $color,
        float $height,
        string $address,
        bool $isActive = true,
    )
    {
        // Atribuição de valores para a classe/parametro
        $this->name = $name;
        $this->color = $color;
        $this->height = $height;
        $this->address = $address;
        $this->isActive = $isActive;
    }
    public function __get($attribute)
    {
        return $this->$attribute;
    }
}