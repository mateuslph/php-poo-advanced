<?php

namespace Alura\Banco\Modelo;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

final class CPF  // "final" significa que a partir desa classe nao sera possivel fazer herancas
{
    private string $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}

?>