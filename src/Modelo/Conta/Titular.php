<?php

namespace Alura\Banco\Modelo\Conta;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

use Alura\Banco\Modelo\Pessoa;  // "use" eh para o php encontrar a classe pessoa, porque "Titular" herda de "Pessoa"
use Alura\Banco\Modelo\CPF;  // eh nescessario fazer com todas as classes que for usar na heranca
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa  // essa (Titular) eh uma classe de heranca da classe Pessoa
{
    private Endereco $endereco;  /* aqui ja esta seguindo a norma do "php 8.0" que define tambem o tipo do atributo, nesse caso 
    classe "Endereco" */

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}

?>