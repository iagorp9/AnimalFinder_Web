<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais perdidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class="bg-blue-400">
<ul class="flex">
        <img src="logo-removebg-preview.png" alt="" width="250px" height="200px" >
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="Home.php">Home</a>
            </li>
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="form_add_animal.php">Cadastrar animal</a>
            </li>
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="#">Procurar animal</a>
            </li>
        </ul>
    </header>
    <?php session_start() ?>
    <h1 class="bg-blue-300 text-center text-blue-500  text-3xl">Lista de 
        Animais perdidos </h1>
        <table class="w-screen mt-3">
            <thead class="bg-blue-800 text-white">
                <th>Raça </th>
                <th>Cor </th>
                <th>Tamanho</th>
                <th>Região</th>
                <th>Ações</th>
            </thead>
            <tbody>
<?php
foreach($_SESSION['animal_data'] as $animal):
?>
   <tr>
<td class="text-center"><?=$animal['animal_name'] ?></td>
<td class="text-center"><?=$animal['animal_color'] ?> </td>
<td class="text-center"><?=$animal['animal_height']?></td>
<td class="text-center"><?=$animal['animal_address']?></td>
<td class="text-center"><a href="../Controller/Animal.php?operation=remove&code=
<?=$animal['animal_code'] ?>" class="text-red-500 font-bold">Remover</a></td>
   </tr>
<?php
 endforeach;
?>
            </tbody>
        </table>
</body>
</html>