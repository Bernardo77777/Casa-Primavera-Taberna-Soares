<?php
/**
 * Dados do restaurante — edita aqui para atualizar o site inteiro.
 */

$restaurante = [
    'nome'        => 'Casa Primavera — Taberna Soares',
    'morada'      => 'R. Góis Pinto 59, 4900-356 Viana do Castelo',
    'telefone'    => '258 821 807',
    'telefone_href' => '+351258821807',
    'email'       => 'catarina.f.soares@hotmail.com',
    'facebook'    => 'https://facebook.com/TabernaSoares',
    'instagram'   => 'https://www.instagram.com/explore/locations/269216727/casa-primavera-taberna-soares',
    'maps_embed'  => 'https://maps.google.com/maps?q=R.+G%C3%B3is+Pinto+59%2C+4900-356+Viana+do+Castelo&output=embed',
    'maps_link'   => 'https://www.google.com/maps/search/?api=1&query=R.+G%C3%B3is+Pinto+59%2C+4900-356+Viana+do+Castelo',
];

$horarios = [
    ['dia' => 'Segunda-feira', 'horas' => '12:00–15:00 e 17:00–22:00'],
    ['dia' => 'Terça-feira',   'horas' => '12:00–15:00'],
    ['dia' => 'Quarta-feira',  'horas' => '12:00–15:00 e 17:00–22:00'],
    ['dia' => 'Quinta-feira',  'horas' => '12:00–15:00 e 17:00–22:00'],
    ['dia' => 'Sexta-feira',   'horas' => '12:00–15:00 e 17:00–22:00'],
    ['dia' => 'Sábado',        'horas' => '12:00–15:00 e 17:00–22:00'],
    ['dia' => 'Domingo',       'horas' => 'Encerrado'],
];

$menuCategoriasEn = [
    'Menu Diário' => 'Daily Menu',
    'Petiscos'    => 'Petiscos (Tapas)',
    'Peixe'       => 'Fish',
    'Carne'       => 'Meat',
    'Sobremesas'  => 'Desserts',
];

$menu = [
    'Menu Diário' => [
        ['nome' => 'Menu diário (sopa, pão, prato principal, bebida e café)', 'nome_en' => 'Daily menu (soup, bread, main course, drink and coffee)', 'preco' => '7,50 €'],
    ],
    'Petiscos' => [
        ['nome' => 'Manteigas', 'nome_en' => 'Butter', 'preco' => '0,30 €'],
        ['nome' => 'Sopa', 'nome_en' => 'Soup', 'preco' => '2,00 €'],
        ['nome' => 'Fêvera no pão', 'nome_en' => 'Grilled pork steak in bread', 'preco' => '2,50 €'],
        ['nome' => 'Mexilhão', 'nome_en' => 'Mussels', 'preco' => '4,50 €'],
        ['nome' => 'Ovas', 'nome_en' => 'Fish roe', 'preco' => '5,00 €', 'desc' => 'Ovas de peixe salteadas, um petisco tradicional português.', 'desc_en' => 'Sautéed fish roe, a traditional Portuguese snack.'],
        ['nome' => 'Vieiras recheadas', 'nome_en' => 'Stuffed scallops', 'preco' => '5,00 €'],
        ['nome' => 'Búzios', 'nome_en' => 'Sea snails', 'preco' => '5,00 €', 'desc' => 'Pequenos caracóis do mar, cozidos e temperados.', 'desc_en' => 'Small sea snails, boiled and seasoned.'],
        ['nome' => 'Tentáculos de pota', 'nome_en' => 'Squid tentacles', 'preco' => '5,00 €'],
        ['nome' => 'Tábua de presunto e queijo', 'nome_en' => 'Ham and cheese board', 'preco' => '10,00 €'],
        ['nome' => 'Percebes (dose)', 'nome_en' => 'Goose barnacles (portion)', 'preco' => '15,00 €', 'desc' => 'Marisco raro colhido nas rochas, sabor intenso a mar.', 'desc_en' => 'Rare shellfish hand-picked from the rocks, with an intense sea flavour.'],
        ['nome' => 'Sapateira — na época (unid.)', 'nome_en' => 'Brown crab — in season (whole)', 'preco' => '18,00 €', 'desc' => 'Caranguejo grande, servido inteiro com a sua carne e miolo.', 'desc_en' => 'Large crab, served whole with its meat and roe.'],
        ['nome' => 'Navalheiras (kg)', 'nome_en' => 'Green crab (per kg)', 'preco' => '22,00 €', 'desc' => 'Caranguejo-verde do Atlântico, muito apreciado na região.', 'desc_en' => 'Atlantic green crab, a regional favourite.'],
        ['nome' => 'Gambas (kg)', 'nome_en' => 'Prawns (per kg)', 'preco' => '23,00 €'],
        ['nome' => 'Gambas fritas (kg)', 'nome_en' => 'Fried prawns (per kg)', 'preco' => '25,00 €'],
        ['nome' => 'Amêijoas (dose)', 'nome_en' => 'Clams (portion)', 'preco' => '12,00 €'],
        ['nome' => 'Camarão da costa (dose)', 'nome_en' => 'Coastal shrimp (portion)', 'preco' => '12,50 €'],
        ['nome' => 'Lavagante (kg)', 'nome_en' => 'European lobster (per kg)', 'preco' => '60,00 €', 'desc' => 'Um dos maiores crustáceos do Atlântico, servido inteiro.', 'desc_en' => 'One of the largest Atlantic crustaceans, served whole.'],
    ],
    'Peixe' => [
        ['nome' => 'Misto de peixe frito (por pessoa)', 'nome_en' => 'Mixed fried fish (per person)', 'preco' => '9,00 €'],
        ['nome' => 'Sardinhas — na época (por pessoa)', 'nome_en' => 'Sardines — in season (per person)', 'preco' => '9,00 €'],
        ['nome' => 'Peixe espada na brasa (por pessoa)', 'nome_en' => 'Grilled scabbardfish (per person)', 'preco' => '11,00 €', 'desc' => 'Peixe-espada preto grelhado na brasa.', 'desc_en' => 'Black scabbardfish grilled over charcoal.'],
        ['nome' => 'Sargo (por pessoa)', 'nome_en' => 'Sea bream (per person)', 'preco' => '12,00 €', 'desc' => 'Peixe branco grelhado, típico da costa portuguesa.', 'desc_en' => 'Grilled white fish, typical of the Portuguese coast.'],
        ['nome' => 'Bacalhau na brasa (por pessoa)', 'nome_en' => 'Grilled codfish (per person)', 'preco' => '16,00 €'],
        ['nome' => 'Polvo grelhado (por pessoa)', 'nome_en' => 'Grilled octopus (per person)', 'preco' => '16,50 €'],
        ['nome' => 'Robalo (kg)', 'nome_en' => 'Sea bass (per kg)', 'preco' => '35,00 €'],
    ],
    'Carne' => [
        ['nome' => 'Picanha — meia dose (por pessoa)', 'nome_en' => 'Picanha steak — half portion (per person)', 'preco' => '9,00 €'],
        ['nome' => 'Posta (por pessoa)', 'nome_en' => 'Veal steak (per person)', 'preco' => '14,00 €'],
        ['nome' => 'Picanha (por pessoa)', 'nome_en' => 'Picanha steak (per person)', 'preco' => '14,00 €'],
        ['nome' => 'Posta à casa (por pessoa)', 'nome_en' => 'House-style veal steak (per person)', 'preco' => '17,50 €', 'desc' => 'Corte de vitela grelhado ao estilo da casa.', 'desc_en' => 'Grilled veal cut, house style.'],
    ],
    'Sobremesas' => [
        ['nome' => 'Pudim', 'nome_en' => 'Pudding (flan)', 'preco' => '2,00 €'],
        ['nome' => 'Gelado', 'nome_en' => 'Ice cream', 'preco' => '2,50 €'],
        ['nome' => 'Bolo de bolacha', 'nome_en' => 'Biscuit cake', 'preco' => '2,50 €'],
        ['nome' => 'Bolo de chocolate', 'nome_en' => 'Chocolate cake', 'preco' => '2,50 €'],
        ['nome' => 'Fatia de melão — na época', 'nome_en' => 'Slice of melon — in season', 'preco' => '2,50 €'],
        ['nome' => 'Fatia de queijo com marmelada', 'nome_en' => 'Cheese slice with quince jam', 'preco' => '2,50 €'],
        ['nome' => 'Rabanadas — na época', 'nome_en' => 'Portuguese French toast — in season', 'preco' => '3,00 €'],
        ['nome' => 'Queijinho curado com marmelada', 'nome_en' => 'Cured cheese with quince jam', 'preco' => '3,00 €'],
        ['nome' => 'Pão de ló "melhor do universo"', 'nome_en' => 'Sponge cake "best in the universe"', 'preco' => '4,00 €'],
        ['nome' => 'Pão de ló com queijo da Serra', 'nome_en' => 'Sponge cake with Serra cheese', 'preco' => '5,00 €'],
    ],
];

$galeria = [
    ['src' => 'images/exterior-fachada.jpg',      'alt' => 'Fachada da Casa Primavera - Taberna Soares'],
    ['src' => 'images/exterior-entrada.jpg',       'alt' => 'Entrada da taberna com o letreiro Casa Primavera'],
    ['src' => 'images/exterior-esplanada.jpg',     'alt' => 'Esplanada exterior da taberna'],
    ['src' => 'images/interior-sala.jpg',          'alt' => 'Sala de refeições com decoração tradicional'],
    ['src' => 'images/interior-bar.jpg',           'alt' => 'Balcão do bar da taberna'],
    ['src' => 'images/equipa.jpg',                 'alt' => 'Equipa da Casa Primavera - Taberna Soares'],
    ['src' => 'images/prato-cataplana.jpg',        'alt' => 'Cataplana de peixe e legumes'],
    ['src' => 'images/prato-ameijoas.jpg',         'alt' => 'Amêijoas à casa'],
    ['src' => 'images/prato-gambas.jpg',           'alt' => 'Gambas com limão'],
    ['src' => 'images/prato-peixe-grelhado.jpg',   'alt' => 'Peixe grelhado com batata a murro'],
    ['src' => 'images/prato-peixe-arroz.jpg',      'alt' => 'Peixe com arroz'],
    ['src' => 'images/prato-arroz-marisco.jpg',    'alt' => 'Arroz de marisco'],
    ['src' => 'images/prato-peixe-frito.jpg',      'alt' => 'Sargo frito com feijão frade'],
    ['src' => 'images/prato-mexilhao-vinho.jpg',   'alt' => 'Mexilhão à casa com vinho tinto'],
    ['src' => 'images/prato-arroz-marisco-panela.jpg', 'alt' => 'Arroz de marisco na panela'],
    ['src' => 'images/prato-bacalhau-legumes.jpg', 'alt' => 'Bacalhau grelhado com legumes'],
    ['src' => 'images/prato-sardinhas.jpg',        'alt' => 'Sardinhas grelhadas com pimentos'],
    ['src' => 'images/prato-gambas-cozidas.jpg',   'alt' => 'Gambas cozidas com vinho branco'],
    ['src' => 'images/prato-gambas-fritas.jpg',    'alt' => 'Gambas fritas com pão'],
    ['src' => 'images/prato-variedade.jpg',        'alt' => 'Seleção de petiscos e marisco da casa'],
    ['src' => 'images/mesa-vinho-branco.jpg',      'alt' => 'Vinho branco da casa à mesa'],
    ['src' => 'images/prato-sapateira-gambas.jpg', 'alt' => 'Sapateira recheada e gambas da casa'],
    ['src' => 'images/evento-romaria-agonia.jpg',  'alt' => 'Romaria da Senhora d\'Agonia na Taberna Soares'],
    ['src' => 'images/exterior-historico.jpg',     'alt' => 'Fotografia histórica do edifício da taberna'],
];
