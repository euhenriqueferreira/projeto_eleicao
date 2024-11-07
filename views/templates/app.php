<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Projeto Eleições</title>
    <style>
        html, body{
            font-family: "Urbanist", serif;
        }
    </style>
</head>
<body class="bg-slate-100 flex flex-col h-screen">
    <header class="w-full max-w-screen-lg mx-auto text-center pt-16 flex items-center justify-between">
        <h1 class="text-4xl font-semibold text-slate-900">Projeto Eleições</h1>
        <nav>
            <ul class="flex items-center gap-x-12">
                <li><a href="/importar-e-registrar" class="text-xl font-normal text-slate-900 hover:underline">Importar</a></li>
                <li><a href="/apuracao" class="text-xl font-normal text-slate-900 hover:underline">Apuração</a></li>
                <li><a href="/resultado" class="text-xl font-normal text-slate-900 hover:underline">Resultado</a></li>
            </ul>
        </nav>
    </header>

    <?php require "views/$view.view.php" ?>

    <footer class="max-w-screen-lg mx-auto text-center pb-14">
        <p class="text-2xl font-normal text-slate-500">Todos os direitos reservados ©</p>
    </footer>
</body>
</html>