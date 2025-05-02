<?php

namespace App\Repositories;

class ProductRepository
{
    public static function all(): array
    {
        return [
            [
                "nome" => "Fachadas",
                "descricao" => 'Quando falamos em fachadas, estamos falando da identidade visual do cliente. é o primeiro contato do público com o estabelecimento, e por isso, deve ser impactante, bem executada e duradoura. É combinação certa entre materiais – acm, vidro, madeira, aço. e o design inteligente faz toda a diferença. A fachada precisa comunicar, proteger e valorizar o ponto comercial.',
                "imagem" => asset('assets/images/products/fachadas.jpg'),
                "categorias" => ["Fachada em ACM", "Pórtico em ACM", "ACM elemento vazado"],
                "link" => "/linha-de-produtos/1"
            ],
            [
                "nome" => "Letreiros",
                "descricao" => 'Letreiros são mais do que nomes em destaque, são a voz da marca. Trabalhar com letreiros exige sensibilidade para o layout, escolha de tipografia e principalmente visibilidade. Pode ser: recorte em pvc, letras caixa em aço inox, mdf, acrílico, com ou sem iluminação. Cada projeto exige um estudo técnico e estético minucioso, porque cada letra carrega a personalidade da marca.',
                "imagem" => asset('assets/images/products/letreiro.jpg'),
                "categorias" => ["Recorte em pvc", "Letras caixa", "Letras caixa iluminado"],
                "link" => "/linha-de-produtos/2"
            ],
            [
                "nome" => "Totens",
                "descricao" => 'Os tótens são imponentes. São marcos visuais que ajudam na localização e reforçam a identidade da empresa de longe. São comuns em postos de combustíveis, shoppings, hospitais e grandes empresas. Um bom tótem começa no projeto estrutural. Resistência ao vento, visibilidade e manutenção devem ser levados em conta desde o primeiro traço. E, claro, um acabamento impecável é o que separa um trabalho amador de um de alto padrão.',
                "imagem" => asset('assets/images/products/toten.jpg'),
                "categorias" => ["Totem em ACM", "Totens Luminosos", "Totens dupla face"],
                "link" => "/linha-de-produtos/3"
            ],
            [
                "nome" => "Luminosos",
                "descricao" => 'Luminosos são peças estratégicas para a visibilidade noturna e também para destacar a presença de uma marca em ambientes internos e externos. Saber trabalhar com difusores, escolher o tipo de iluminação ideal e garantir uma instalação segura é o segredo para um resultado profissional.',
                "imagem" => asset('assets/images/products/luminosos.jpg'),
                "categorias" => ["Backlight", "Frontlight", "Retroiluminado"],
                "link" => "/linha-de-produtos/4"
            ],
            [
                "nome" => "Placas",
                "descricao" => 'As placas comunicam de forma direta. Seja para sinalização interna, externa, institucional ou promocional, elas precisam ser funcionais e bonitas. Podem ser em ps, pvc, acm, acrílico. O segredo está na legibilidade, no contraste e no posicionamento. Uma placa bem-feita é um investimento, não um custo.',
                "imagem" => asset('assets/images/products/placa.jpg'),
                "categorias" => ["Placa em acrilico", "Placa indicativa de teto", "Placa com adesivo reflexivo"],
                "link" => "/linha-de-produtos/5"
            ],
            [
                "nome" => "Paineis",
                "descricao" => 'Os painéis são superfícies de comunicação inteligente. Servem para destacar mensagens, produtos ou marcas de forma direta e impactante. Podem ser feitos em acm, lona impressa, adesivos ou combinações de materiais, dependendo do local e do objetivo. Um bom painel une visual marcante, durabilidade e instalação segura. Cada projeto é um equilíbrio entre design e estrutura, para que a comunicação seja clara e eficiente.',
                "imagem" => asset('assets/images/products/paineis.jpg'),
                "categorias" => ["Painel em ACM", "Painel em lona impressa", "Painel em lona adesiva"],
                "link" => "/linha-de-produtos/6"
            ],
            [
                "nome" => "Coberturas",
                "descricao" => 'As coberturas não são só proteção, são extensão da marca. Policabornato, lona tensionada, estrutura metálica... Tudo precisa conversar com o projeto visual do ambiente. A estética deve caminhar com a funcionalidade.',
                "imagem" => asset('assets/images/products/cobertura.jpg'),
                "categorias" => ["Cobertura de Policarbonato", "Pergolado em ACM madeira", "Cobertura em ACM"],
                "link" => "/linha-de-produtos/7"
            ],
            [
                "nome" => "Revestimento ACM",
                "descricao" => 'O revestimento em acm é a escolha perfeita para quem busca um visual moderno, limpo e resistente. Além de embelezar, ele protege a estrutura e valoriza a fachada. Versátil e sofisticado, permite diversas aplicações em áreas externas e internas, com excelente acabamento. Quando bem executado, o revestimento em acm transforma qualquer ambiente, alinhando funcionalidade e design com alto padrão.',
                "imagem" => asset('assets/images/products/revestimento.jpeg'),
                "categorias" => ["Revestimento termoplástico", "Revestimento mineral", "Revestimento antichamas"],
                "link" => "/linha-de-produtos/8"
            ],
            [
                "nome" => "Estruturas metálicas",
                "descricao" => 'As estruturas metálicas são a base invisível que sustenta grande parte do nosso trabalho. Seja para fachadas, tótens, coberturas ou suportes de painéis, é essencial que sejam bem projetadas, com cálculos estruturais precisos. Um bom serralheiro, aliado a um projetista experiente, é o que garante segurança e longevidade às peças.',
                "imagem" => asset('assets/images/products/pergolado.jpg'),
                "categorias" => ["Grafismo Aço Corten", "Pergolado", "Porta em ACM"],
                "link" => "/linha-de-produtos/9"
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        $produtos = self::all();
        return $produtos[$id - 1] ?? null;
    }
}
