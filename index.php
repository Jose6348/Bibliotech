<?php
require 'dados.php';
?>


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

        <h1 class="mt-6 font-bold text-lg">Explorar</h1>

        <form action="" class="w-full flex space-x-2 ">

            <input type="text" class="border-stone-800 border-2 rounded-md  bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
                placeholder="Pesquisar..."
                name="Pesquisar">
            <button type="submit">🔍</button>
        </form>


        <section class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-4 ">
            <?php foreach($livros as $livro): ?>

            <div class="  p-2 border-stone-800 border-2 bg-stone-900">
                <div class=" flex">
                    <div class="w-1/3">image</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline">
                        <?=$livro['titulo']?>
                        </a>
                        <div class="text-xs italic">
                        <?=$livro['autor']?>
                        </div>
                        <div class="text-xs italic">
                            ⭐️⭐️⭐️⭐️⭐️ <?=$livro['avaliacoes']?>
                        </div>
                    </div>
                </div>

                <div class="text-sm"><?=$livro['descricao']?></div>
            </div>

            <?php endforeach; ?>


          

    </main>
</body>

</html>