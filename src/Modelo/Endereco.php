<?php

namespace Alura\Banco\Modelo;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto


// anotation: em algumas ides como phpstorn isso ajuda a identificar os atributos (nesse exemplo no arquivo "enderecos.php")
/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedade;  // essa eh uma "trait", e pode usar quantas for nescessario

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

    public function recuperaCidade() : string  // esses metodos sao chamados "metodos acessores"
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

    public function __toString(): String  // metodo magico, porque comeca com "__"
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";  // formata como sera exibido os enderecos
    }
}

?>