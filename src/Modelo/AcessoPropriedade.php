<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get(string $nomeAtributo)  // transforma em um metodo acessor atraves de um atributo
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

?>