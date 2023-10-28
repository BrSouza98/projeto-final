<?php

class Filme{
    public int $id;
    public string $nome;
    public string $lancamento;
    public string $atores;
    public string $diretor;

    public function __construct(int $id, string $nome, DateTime $lancamento, string $atores, string $diretor)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->lancamento = $lancamento->format("d/m/Y");
        $this->atores = $atores;
        $this->diretor = $diretor;
    }
}