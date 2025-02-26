<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-neutral-900 text-neutral-400">
    <header class=" bg-stone-800 ">
        <nav class="mx-auto max-w-screen-lg flex justify-between  py-4">
            <div class="text-bold text-xl tracking-wide">
                Bibliotech
            </div>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-emerald-600">Explorar</a></li>
                <li><a href="/meus-livros.php " class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li>
                    <a href="/login.php" class="hover:underline">Fazer login </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-10">

    <?php require "views/{$view}.view.php"; ?>

    </main>
</body>

</html>