<?php

namespace APP\Controller;

use APP\Model\Animal;
use APP\Model\Validation;
use APP\Utils\Redirect;
use APP\Model\DAO\AnimalDAO;


require_once '../../vendor/autoload.php';


switch ($_GET['operation']) {
    case 'insert':
        insertAnimal();
        break;
    case 'list':
        listAnimals();
        break;
    case 'remove':
        remove();
        break;
    default:
        Redirect::redirect(message: 'Operação inválida!!', type: 'error');
}

function insertAnimal()
{
    if (empty($_POST)) {
        Redirect::redirect(
            message: 'requisição invalida',
            type: 'error'
        );
    }
    $AnimalName = $_POST["name"];
    $AnimalColor = $_POST["color"];
    $AnimalHeight = (float) $_POST["height"];
    $AnimalAddress = $_POST["address"];

    $error = array();

    if (!Validation::validateName($AnimalName)) {
        array_push($error, "O nome do animal deve conter ao menos 5 caracteres!!!");
    }

    if (!Validation::validateColor($AnimalColor)) {
        array_push($error, "A cor do animal deve ter ao menos 3 caracteres!!!");
    }

    if (!Validation::validateHeight($AnimalHeight)) {
        array_push($error, "A altura do animal deve conter 2 caracteres!!!");
    }

    if (!Validation::validateAddress($AnimalAddress)) {
        array_push($error, "O endereço do animal perdido deve conter ao menos 10 caracteres!!!");
    }

    if ($error) { // Se existerem erros
        Redirect::redirect(
            message: $error,
            type: 'warning'
        );
    } else {
        $animal = new Animal(
            name: $AnimalName,
            color: $AnimalColor,
            height: $AnimalHeight,
            address: $AnimalAddress
        );
        $dao = new AnimalDAO();
        $result = $dao->insert($animal);

        if ($result)
            Redirect::redirect(
                message: "Animal perdido cadastrado com sucesso"
            );
        else
            Redirect::redirect(message: ['não foi possivel cadastrar o animal'], type: 'warning');
    }
}
function listAnimals()
{
    $dao = new AnimalDAO();
    session_start();
    $data = $dao->findALL();

    if ($data) {
        $_SESSION['animal_data'] = $data;
        header('location:../View/list_of_animals.php');
    } else {
        Redirect::redirect(
            message: ['Lamento, não existem animais perdidos cadastrados!!!'],
            type: 'warning'
        );
    }
}
function remove()
{
    if (empty($_GET['code'])) {
        Redirect::redirect(message: 'Nenhum codigo de animal foi encontrado', type: 'error');
    }
    if (!Validation::validateNumber($_GET['code'])) {
        Redirect::redirect(message: 'O codigo do animal informado é inválido', type: 'error');
    }
    $dao = new AnimalDAO();
    $result = $dao->delete($_GET['code']);

    if ($result) {
        Redirect::redirect(message: 'animal removido com sucesso');
    } else {
        Redirect::redirect(message: 'Não foi possivel remover o animal!');
    }
}
