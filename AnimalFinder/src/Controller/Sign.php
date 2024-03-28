<?php

namespace APP\Controller;

use APP\Model\Sign;
use APP\Model\Validation;
use APP\Utils\Redirect;


require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$UsuarioName = $_POST["name"];
$UsuarioPassword = $_POST["password"];
$UsuarioEmail = $_POST["email"];

$error = array();

if(!Validation::validateName($UsuarioName)){
    array_push($error, "O nome do usuario deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validatePassword($UsuarioPassword)){
    array_push($error, "a senha deve ter ao menos 6 caracteres!!!");
}

if(!Validation::validateEmail($UsuarioEmail)){
    array_push($error, "o email deve ter ao menos 10 caracteres!!!");
}


if($error){// Se existerem erros
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $sign= new Sign(
        name: $UsuarioName,
        password: $UsuarioPassword,
        email: $UsuarioEmail
    );

    // TODO Salvar no banco de dados

    Redirect::redirect(
        message: "Usuario cadastrado com sucesso!!!"
    );
}