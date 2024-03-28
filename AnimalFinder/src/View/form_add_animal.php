<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Loja de varejo, compras, roupas, tenis"> 
    <title>AnimalFinder - Cadastrar animal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-red-500">
        <ul class="flex">
        <img src="logo-removebg-preview.png" alt="" width="250px" height="200px" >
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="Home.php">Home</a>
            </li>
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="#">Cadastrar animal</a>
            </li>
            <li class=" mx-3 mt-6 text-[30px] underline underline-offset-3">
                <a href="../Controller/Animal.php?operation=list">Procurar animal</a>
            </li>
        </ul>
     <main class="mt-4">
        <form action="../Controller/Animal.php?operation=insert" method="POST" class="bg-red-300">
            <section class="columns-4">
                <article class="mx-3 text-[30px]">
                    <label for="name">Raça do animal:</label>
                    <input type="text" id="name" name="name" class="border border-stone-900">
                </article>
                <article class="mx-3 mt-8 text-[30px]">
                    <label for="color">Cor do animal:</label>
                    <input type="text" id="color" name="color" class="border border-stone-900" min=1>
                </article>
                <article class="mx-3 mt-1 text-[30px]">
                    <label for="height">Tamanho:</label>
                    <input type="float" id="height" name="height" class="border border-stone-900" min=1>
                </article>
                <article class="mx-3 mt-1 text-[30px]">
                    <label for="address">Região:</label>
                    <input type="text" id="address" name="address" class="border border-stone-900" min=1>
                </article>
            </section>
            <article class="flex justify-center mt-3 text-[35px]">
                <button type="submit" class="rounded-full p-4 bg-orange-500 text-white">Cadastrar</button>          
            </article>
        </form>
    </main>
    <header class="bg-slate-900 aspect-square">
    </header>
</body>
</html>