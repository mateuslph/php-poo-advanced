<?php

namespace Alura\Banco\Modelo;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

class Endereco
{
    private string $cidade;  // apartir do "php 8.0" eh recomendavel tambem declarar o tipo do atributo, nesse caso eh "string"
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct (string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade() : string
    {
        return $this->cidade;
    }

    public function recuperaBairro() : string
    {
        return $this->bairro;
    }

    public function recuperaRua() : string
    {
        return $this->rua;
    }

    public function recuperaNumero() : string
    {
        return $this->numero;
    }
}

?>