<?php
require __DIR__ . '/php/dados.php';

$anoAtual = date('Y');
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Casa Primavera — Taberna Soares | Restaurante em Viana do Castelo</title>
<meta name="description" content="Casa Primavera - Taberna Soares: tasca tradicional na Ribeira de Viana do Castelo, especialista em petiscos, marisco e peixe fresco desde 1940.">
<link rel="icon" type="image/png" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<noscript><style>.page-loader { display: none !important; }</style></noscript>
</head>
<body>

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

<header class="site-header" id="topo">
    <div class="container header-inner">
        <a href="#topo" class="brand">
            <img src="images/logo-barril.jpg" alt="Casa Primavera - Taberna Soares" class="brand-logo">
            <span class="brand-text">Casa Primavera<small>Taberna Soares</small></span>
        </a>
        <button class="nav-toggle" id="navToggle" aria-label="Abrir menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="#sobre">Sobre Nós</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#ementa">Ementa</a></li>
                <li><a href="#horarios">Horários</a></li>
                <li><a href="#contactos">Contactos</a></li>
                <li><a href="#localizacao">Localização</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero" id="hero" style="background-image:url('images/exterior-esplanada.jpg');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1>Casa Primavera<span>Taberna Soares</span></h1>
        <p>Uma tasca tradicional na Ribeira de Viana do Castelo — petiscos, marisco e peixe fresco desde 1940.</p>
        <div class="hero-actions">
            <a href="#ementa" class="btn btn-primary">Ver Ementa</a>
            <a href="#contactos" class="btn btn-outline">Reservar / Contactar</a>
        </div>
    </div>
</section>

<main>

    <section class="section" id="sobre">
        <div class="container split">
            <div class="split-text reveal">
                <h2>Sobre Nós</h2>
                <p>A Casa Primavera – Taberna Soares nasceu por volta de 1940, na histórica Ribeira de Viana do Castelo, junto à Igreja de S. Domingos. Ainda conhecida por muitos como "Tone Bento", a casa tornou-se rapidamente uma referência do bairro pelo seu vinho, bacalhau frito e petiscos de marisco, sendo durante décadas ponto de encontro de pescadores e ponto de convívio da comunidade ribeirinha.</p>
                <p>Há 17 anos, a família Soares assumiu o negócio e deu-lhe o nome que hoje conhecemos, mantendo viva a tradição da tasca portuguesa: mesas de madeira, boa disposição e uma cozinha que celebra o melhor do mar e da cultura marítima vianense.</p>
                <p>Hoje somos uma taberna acolhedora especializada em petiscos, marisco fresco, peixe grelhado e pratos de carne — sempre com aquele toque de casa que só se encontra numa tasca de bairro.</p>
            </div>
            <div class="split-image reveal">
                <img src="images/interior-sala.jpg" alt="Sala de refeições da Casa Primavera - Taberna Soares" loading="lazy">
            </div>
        </div>
    </section>

    <?php $galeriaVisivel = 12; ?>
    <section class="section section-alt" id="galeria">
        <div class="container">
            <h2 class="section-title">Galeria</h2>
            <p class="section-subtitle">Um pouco do ambiente, dos pratos e das pessoas da nossa taberna.</p>
            <div class="gallery-grid" id="galleryGrid">
                <?php foreach ($galeria as $i => $foto): ?>
                <button type="button" class="gallery-item reveal <?= $i >= $galeriaVisivel ? 'gallery-item-hidden' : '' ?>" data-index="<?= $i ?>">
                    <img src="<?= htmlspecialchars($foto['src']) ?>" alt="<?= htmlspecialchars($foto['alt']) ?>" loading="lazy">
                </button>
                <?php endforeach; ?>
            </div>
            <?php if (count($galeria) > $galeriaVisivel): ?>
            <div class="gallery-toggle-wrapper">
                <button type="button" class="btn btn-outline gallery-toggle" id="galleryToggle" data-more-text="Ver mais fotos (+<?= count($galeria) - $galeriaVisivel ?>)" data-less-text="Ver menos fotos">Ver mais fotos (+<?= count($galeria) - $galeriaVisivel ?>)</button>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="lightbox" id="lightbox" aria-hidden="true">
        <button type="button" class="lightbox-close" id="lightboxClose" aria-label="Fechar">&times;</button>
        <button type="button" class="lightbox-prev" id="lightboxPrev" aria-label="Anterior">&#10094;</button>
        <img src="" alt="" id="lightboxImage">
        <button type="button" class="lightbox-next" id="lightboxNext" aria-label="Seguinte">&#10095;</button>
    </div>

    <section class="section" id="ementa">
        <div class="container">
            <div class="section-title-row">
                <div>
                    <h2 class="section-title">Ementa</h2>
                    <p class="section-subtitle" data-pt="Petiscos, marisco, peixe e carne — sabores tradicionais da Ribeira." data-en="Tapas, seafood, fish and meat — traditional flavours from the Ribeira.">Petiscos, marisco, peixe e carne — sabores tradicionais da Ribeira.</p>
                </div>
                <button type="button" class="lang-toggle lang-toggle-light" id="langToggle" data-lang="pt">EN</button>
            </div>

            <div class="menu-tabs" id="menuTabs">
                <?php foreach (array_keys($menu) as $i => $categoria): ?>
                <button type="button" class="menu-tab <?= $i === 0 ? 'active' : '' ?>" data-target="menu-<?= $i ?>" data-pt="<?= htmlspecialchars($categoria) ?>" data-en="<?= htmlspecialchars($menuCategoriasEn[$categoria] ?? $categoria) ?>"><?= htmlspecialchars($categoria) ?></button>
                <?php endforeach; ?>
            </div>

            <?php $i = 0; foreach ($menu as $categoria => $itens): ?>
            <div class="menu-panel <?= $i === 0 ? 'active' : '' ?>" id="menu-<?= $i ?>">
                <ul class="menu-list">
                    <?php foreach ($itens as $item): ?>
                    <li class="menu-item">
                        <span class="menu-item-name" data-pt="<?= htmlspecialchars($item['nome']) ?>" data-en="<?= htmlspecialchars($item['nome_en'] ?? $item['nome']) ?>"><?= htmlspecialchars($item['nome']) ?></span>
                        <span class="menu-item-dots"></span>
                        <span class="menu-item-price"><?= htmlspecialchars($item['preco']) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php $i++; endforeach; ?>
            <p class="menu-note" data-pt="Preços sujeitos a alteração sem aviso prévio. Pratos sazonais dependem da disponibilidade do mercado." data-en="Prices subject to change without notice. Seasonal dishes depend on market availability.">Preços sujeitos a alteração sem aviso prévio. Pratos sazonais dependem da disponibilidade do mercado.</p>
        </div>
    </section>

    <section class="section section-alt" id="horarios">
        <div class="container split split-reverse">
            <div class="split-image reveal">
                <img src="images/exterior-entrada.jpg" alt="Entrada da Casa Primavera - Taberna Soares" loading="lazy">
            </div>
            <div class="split-text reveal">
                <h2>Horários</h2>
                <table class="hours-table">
                    <tbody>
                    <?php foreach ($horarios as $h): ?>
                        <tr class="<?= $h['horas'] === 'Encerrado' ? 'closed' : '' ?>">
                            <td><?= htmlspecialchars($h['dia']) ?></td>
                            <td><?= htmlspecialchars($h['horas']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section" id="contactos">
        <div class="container">
            <h2 class="contactos-title">Contactos</h2>
            <div class="split split-top">
            <div class="split-text">
                <div class="contact-info">
                    <a href="<?= htmlspecialchars($restaurante['maps_link']) ?>" target="_blank" rel="noopener" class="contact-card reveal">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </span>
                        <span class="contact-detail">
                            <span class="contact-label">Morada</span>
                            <span class="contact-value"><?= htmlspecialchars($restaurante['morada']) ?></span>
                        </span>
                    </a>
                    <a href="tel:<?= htmlspecialchars($restaurante['telefone_href']) ?>" class="contact-card reveal">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z"/></svg>
                        </span>
                        <span class="contact-detail">
                            <span class="contact-label">Telefone</span>
                            <span class="contact-value"><?= htmlspecialchars($restaurante['telefone']) ?></span>
                        </span>
                    </a>
                    <a href="mailto:<?= htmlspecialchars($restaurante['email']) ?>" class="contact-card reveal">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                        </span>
                        <span class="contact-detail">
                            <span class="contact-label">Email</span>
                            <span class="contact-value"><?= htmlspecialchars($restaurante['email']) ?></span>
                        </span>
                    </a>
                    <a href="<?= htmlspecialchars($restaurante['facebook']) ?>" target="_blank" rel="noopener" class="contact-card reveal">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3Z"/></svg>
                        </span>
                        <span class="contact-detail">
                            <span class="contact-label">Facebook</span>
                            <span class="contact-value">facebook.com/TabernaSoares</span>
                        </span>
                    </a>
                </div>

                <a href="mailto:<?= htmlspecialchars($restaurante['email']) ?>" class="btn btn-primary contact-email-btn">Enviar Email</a>
            </div>
            <div class="split-image reveal">
                <img src="images/interior-bar.jpg" alt="Balcão da Casa Primavera - Taberna Soares" loading="lazy">
            </div>
            </div>
        </div>
    </section>

    <section class="section section-alt" id="localizacao">
        <div class="container">
            <h2 class="section-title">Localização</h2>
            <p class="section-subtitle"><?= htmlspecialchars($restaurante['morada']) ?></p>
            <div class="map-wrapper reveal">
                <iframe src="<?= htmlspecialchars($restaurante['maps_embed']) ?>" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Mapa de localização da Casa Primavera - Taberna Soares"></iframe>
            </div>
            <a class="btn btn-outline map-link" href="<?= htmlspecialchars($restaurante['maps_link']) ?>" target="_blank" rel="noopener">Abrir no Google Maps</a>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; <?= htmlspecialchars($anoAtual) ?> Casa Primavera — Taberna Soares. Todos os direitos reservados.</p>
        <p><?= htmlspecialchars($restaurante['morada']) ?> · <a href="tel:<?= htmlspecialchars($restaurante['telefone_href']) ?>"><?= htmlspecialchars($restaurante['telefone']) ?></a></p>
    </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>
