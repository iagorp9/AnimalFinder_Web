<?php

namespace APP\Controller;

use APP\Model\Login;
use APP\Model\Validation;
use APP\Utils\Redirect;


require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$usuarioname = $_POST["name"];
$usuariopassword = $_POST["password"];

$error = array();

if(!Validation::validateName($usuarioname)){
    array_push($error, "O nome do usuario deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validatePassword($usuariopassword)){
    array_push($error, "a senha deve ter ao menos 6 caracteres!!!");
}


if($error){// Se existerem erros
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $login = new Login(
        name: $usuarioname,
        password: $usuariopassword
    );

    // TODO Salvar no banco de dados

    Redirect::redirect(
        message: "Usuario logado com sucesso!!!"
    );
}