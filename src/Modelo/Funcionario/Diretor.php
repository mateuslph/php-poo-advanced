<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel  // pode ser implementedo quantas interfasses for nescessaria
{
    public function calculaBonificacao(): float  // o metodo pode sobreescrever o metodo da mae se for nescessario
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}

?>