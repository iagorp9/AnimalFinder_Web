<?php

namespace APP\Model;

class Sign
    // Propriedades
    {
    private string $name;
    private string $email;
    private string $password;

    public function __construct(
        // Atributos/objetos
        string $name,
        string $password,
        string $email,
        bool $isActive = true,
    )
    {
        // Atribuição de valores para a classe/parametro
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->isActive = $isActive;
    }
}