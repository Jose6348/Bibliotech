<?=$livro['titulo']?>
    
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