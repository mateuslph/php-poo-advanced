<?php

namespace Alura\Banco\Modelo;  // o namespace pode-se colocar qualquer nome, mas eh interessante constar as pastas do projeto

class Pessoa
{
    use AcessoPropriedade;

    protected string $nome;  /* nessa linha o nome reservado "protect" define que somente essa classe e suas filhas podem acessar esse
    parametro */
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
 
    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)  // metodo "final" nao eh possivel sobreescrever
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}

?>