<?php

namespace APP\Model;

class Login
{
    
    private string $name;
    private string $password;

    public function __construct(
        // Atributos/objetos
        string $name,
        string $password,
        bool $isActive = true,
    )
    {
        // Atribuição de valores para a classe/parametro
        $this->name = $name;
        $this->password = $password;
        $this->isActive = $isActive;
    }
}