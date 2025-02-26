<h1 class="mt-6 font-bold text-lg">Explorar</h1>

<form action="" class="w-full flex space-x-2 ">

    <input type="text" class="border-stone-800 border-2 rounded-md  bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
        placeholder="Pesquisar..."
        name="Pesquisar">
    <button type="submit">🔍</button>
</form>


<section class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-4 ">


    <?php foreach ($livros as $livro): ?>

        <div class="  p-2 border-stone-800 border-2 bg-stone-900">
            <div class=" flex">
                <div class="w-1/3">image</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline">
                        <?= $livro['titulo'] ?>
                    </a>
                    <div class="text-xs italic">
                        <?= $livro['autor'] ?>
                    </div>
                    <div class="text-xs italic">
                        ⭐️⭐️⭐️⭐️⭐️ <?= $livro['avaliacoes'] ?>
                    </div>
                </div>
            </div>

            <div class="text-sm"><?= $livro['descricao'] ?></div>
        </div>

    <?php endforeach; ?>
</section>