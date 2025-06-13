<?php include_once "backend.php"; ?>

<h1>Bem-vindo a nossa loja <?= $nome ?></h1>
<p>Conheça os nossos produtos:</p>

<ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>