<?php

namespace App\Repositories;

class ProductRepository
{
    public static function all(): array
    {
        return [
            [
                "nome" => "Fachadas",
                "imagem" => "/images/products/fachadas.jpg",
                "categorias" => ["Fachada em ACM", "Pórtico em ACM", "ACM elemento vazado"],
                "link" => "/product/1"
            ],
            [
                "nome" => "Letreiros",
                "imagem" => "/images/products/letreiro.jpg",
                "categorias" => ["Fachada em ACM", "Pórtico em ACM", "ACM elemento vazado"],
                "link" => "/product/2"
            ],
            [
                "nome" => "Totens",
                "imagem" => "/images/products/toten.jpg",
                "categorias" => ["Totem em ACM"],
                "link" => "/product/3"
            ],
            [
                "nome" => "Luminosos",
                "imagem" => "/images/products/luminosos.jpg",
                "categorias" => ["Led", "Neon"],
                "link" => "/product/4"
            ],
            [
                "nome" => "Placas",
                "imagem" => "/images/products/placa.jpg",
                "categorias" => ["Placa em acrilico", "Placa indicativa de teto", "Placa com adesivo reflexivo"],
                "link" => "/product/5"
            ],
            [
                "nome" => "Paineis",
                "imagem" => "/images/products/paineis.jpg",
                "categorias" => ["Painel em ACM", "Painel em lona impressa", "Painel em lona adesiva"],
                "link" => "/product/6"
            ],
            [
                "nome" => "Coberturas",
                "imagem" => "/images/products/cobertura.jpg",
                "categorias" => ["Coberturas", "Estruturas Metálicas"],
                "link" => "/product/7"
            ],
            [
                "nome" => "Revestimento ACM",
                "imagem" => "/images/products/revestimento.jpeg",
                "categorias" => ["Revestimento ACM"],
                "link" => "/product/8"
            ],
            [
                "nome" => "Estruturas metálicas",
                "imagem" => "/images/products/pergolado.jpg",
                "categorias" => ["Grafismo Aço Corten", "Pergolado", "Porta em ACM"],
                "link" => "/product/9"
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        $produtos = self::all();
        return $produtos[$id - 1] ?? null;
    }
}
