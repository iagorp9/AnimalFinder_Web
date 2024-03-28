<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="flex items-center justify-center w-full h-screen">
        <?php
        session_start();
        if (empty($_SESSION)) {
            header("location:../../index.html");
        }
        if (!empty($_SESSION['msg_success'])) :
        ?>
            <article class="flex flex-col items-center w-2/4 text-white bg-lime-300 rounded-full">
                <p class="underline underline-offset-2 p-4">
                    <?= $_SESSION['msg_success'] ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_success']);
        ?>
        <?php
        if (!empty($_SESSION['msg_error'])) :
        ?>
            <article class="flex flex-col items-center w-2/4 text-white bg-red-700 rounded-full">
                <p class="underline underline-offset-2 p-4">
                    <?= $_SESSION['msg_error'] ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_error']);
        ?>
        <?php
        if (!empty($_SESSION['msg_warning'])) :
        ?>
            <article class="flex flex-col items-center w-2/4 text-white bg-yellow-300 rounded-full">
                <ul class="underline underline-offset-2 p-4">
                    <?= $_SESSION['msg_warning'] ?>
                </ul>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_warning'])
        ?>
    </main>
</body>

</html>