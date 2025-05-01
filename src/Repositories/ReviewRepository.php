<?php

namespace App\Repositories;

class ReviewRepository
{
    public static function all(): array
    {
        return [
            [
                "nome" => "Beatriz Japiassu",
                "stars" => 5,
                "review" => "Aqui na Marmoraria Verona fizeram um excelente trabalho. Tudo foi perfeito...",
                "link" => "https://g.co/kgs/ozsmydq"
            ],
            [
                "nome" => "Natália Belisário",
                "stars" => 5,
                "review" => "A FGL confeccionou o letreiro da fachada do meu escritório...",
                "link" => "https://g.co/kgs/JnE5cBX"
            ],
            [
                "nome" => "Leticia Bittencourt",
                "stars" => 5,
                "review" => "Realizamos a troca de logomarca de algumas filiais do Cultura inglesa...",
                "link" => "https://g.co/kgs/y1AjBFa"
            ],
            [
                "nome" => "Tiago Bessa",
                "stars" => 5,
                "review" => "Não tem, em Goiânia, empresa de comunicação visual como eles...",
                "link" => "https://g.co/kgs/U7si1K5"
            ],
            [
                "nome" => "Felipe Veloso",
                "stars" => 5,
                "review" => "Fui muito bem atendido pela Fernanda...",
                "link" => "https://g.co/kgs/1kEkCQq"
            ],
            [
                "nome" => "Fabiana Stival",
                "stars" => 5,
                "review" => "Maior referência do Centro-Oeste e do Brasil em comunicação visual...",
                "link" => "https://g.co/kgs/kmxrgmt"
            ],
            [
                "nome" => "Guilherme Siqueira Junior",
                "stars" => 5,
                "review" => "Experiência positiva no atendimento com a Fernanda… prestativa e ágil…",
                "link" => "https://g.co/kgs/yxMcjiU"
            ],
        ];
    }
}
