<?php
require __DIR__ . '/php/dados.php';
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ementa — Casa Primavera | Taberna Soares</title>
<meta name="description" content="Ementa da Casa Primavera - Taberna Soares: petiscos, marisco, peixe, carne e sobremesas.">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ementa.css">
<noscript><style>.page-loader { display: none !important; }</style></noscript>
</head>
<body class="menu-page">

<div class="page-loader" id="pageLoader" aria-hidden="true">
    <div class="page-loader-ring">
        <img src="images/logo-barril.jpg" alt="" class="page-loader-logo">
    </div>
    <p class="page-loader-title">Casa Primavera</p>
    <p class="page-loader-subtitle">Taberna Soares</p>
    <svg class="page-loader-wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
        <path fill="rgba(255,255,255,0.07)" d="M0,64L80,58.7C160,53,320,43,480,48C640,53,800,75,960,80C1120,85,1280,75,1360,69.3L1440,64L1440,120L0,120Z"></path>
    </svg>
</div>

<header class="menu-hero">
    <button type="button" class="lang-toggle" id="langToggle" data-lang="pt">EN</button>
    <img src="images/logo-barril.jpg" alt="Casa Primavera - Taberna Soares" class="menu-hero-logo">
    <h1 class="menu-hero-title">Casa Primavera</h1>
    <p class="menu-hero-subtitle">Taberna Soares</p>
</header>

<main class="menu-page-main">
    <div class="container">

        <div class="menu-tabs" id="menuTabs">
            <?php foreach (array_keys($menu) as $i => $categoria): ?>
            <button type="button" class="menu-tab <?= $i === 0 ? 'active' : '' ?>" data-target="menu-<?= $i ?>" data-pt="<?= htmlspecialchars($categoria) ?>" data-en="<?= htmlspecialchars($menuCategoriasEn[$categoria] ?? $categoria) ?>"><?= htmlspecialchars($categoria) ?></button>
            <?php endforeach; ?>
        </div>

        <?php $i = 0; foreach ($menu as $categoria => $itens): ?>
        <div class="menu-panel <?= $i === 0 ? 'active' : '' ?>" id="menu-<?= $i ?>">
            <ul class="menu-list menu-list-detailed">
                <?php foreach ($itens as $item): ?>
                <li class="menu-item menu-item-detailed">
                    <div class="menu-item-top">
                        <span class="menu-item-name" data-pt="<?= htmlspecialchars($item['nome']) ?>" data-en="<?= htmlspecialchars($item['nome_en'] ?? $item['nome']) ?>"><?= htmlspecialchars($item['nome']) ?></span>
                        <span class="menu-item-dots"></span>
                        <span class="menu-item-price"><?= htmlspecialchars($item['preco']) ?></span>
                    </div>
                    <?php if (!empty($item['desc'])): ?>
                    <p class="menu-item-desc" data-pt="<?= htmlspecialchars($item['desc']) ?>" data-en="<?= htmlspecialchars($item['desc_en'] ?? $item['desc']) ?>"><?= htmlspecialchars($item['desc']) ?></p>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php $i++; endforeach; ?>

        <p class="menu-note" data-pt="Preços sujeitos a alteração sem aviso prévio. Pratos sazonais dependem da disponibilidade do mercado." data-en="Prices subject to change without notice. Seasonal dishes depend on market availability.">Preços sujeitos a alteração sem aviso prévio. Pratos sazonais dependem da disponibilidade do mercado.</p>

        <a href="index.php" class="menu-back-link" data-pt="Ver o site completo" data-en="View full website">Ver o site completo</a>
    </div>
</main>

<script src="js/script.js"></script>
</body>
</html>
