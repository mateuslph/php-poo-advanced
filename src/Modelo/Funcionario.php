<?php

namespace Alura\Banco\Modelo;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

class Funcionario extends Pessoa  // essa eh uma classe de heranca
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);  // aqui esta chamando construtor da classe base (parent)
        $this->cargo = $cargo;
    }

    public function recuperaCargo() : string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome) : void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}

?>