<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Projeto Eleições</title>
    <style>
        html, body{
            font-family: "Urbanist", serif;
        }

        .font-number{
            font-family: "Roboto Mono", monospace;
        }
    </style>
</head>
<body class="bg-slate-100 dark:bg-slate-900 flex flex-col h-screen">
    <header class="w-full max-w-screen-lg mx-auto text-center pt-16 flex items-center justify-between">
        <h1 class="text-4xl font-semibold text-slate-900 dark:text-slate-100">Projeto Eleições</h1>
        <nav>
            <ul class="flex items-center gap-x-12">
                <li><a href="/importar-e-registrar" class="text-xl font-normal text-slate-900 dark:text-slate-100 hover:underline">Importar</a></li>
                <li><a id="apuracao-anchor" href="/apuracao"  class="text-xl font-normal text-slate-900 dark:text-slate-100 hover:underline">Apuração</a></li>
                <li><a id="resultados-anchor" href="/resultado"  class="text-xl font-normal text-slate-900 dark:text-slate-100 hover:underline">Resultado</a></li>
            </ul>
        </nav>
    </header>

    <?php require "views/$view.view.php" ?>

    <footer class="max-w-screen-lg mx-auto text-center pb-14">
        <p class="text-xl font-normal text-slate-500 dark:text-slate-200">Todos os direitos reservados ©</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <?php if($view === 'importar-e-registrar'):?>
        <script src="js/import.js"></script>
    <?php endif;?>
    <?php if($view === 'apuracao'):?>
        <script src="js/apuracao.js"></script>
    <?php endif;?>
    <?php if($view === 'resultado'):?>
        <script src="js/resultado.js"></script>
    <?php endif;?>
</body>
</html>