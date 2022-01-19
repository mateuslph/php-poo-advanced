<?php

namespace Alura\Banco\Modelo\Funcionario;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa  // essa eh uma classe de heranca
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);  // aqui esta chamando construtor da classe base (parent)
        $this->salario = $salario;
    }

    public function alteraNome(string $nome) : void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo 'O aumento deve ser positivo!';
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
}

?>