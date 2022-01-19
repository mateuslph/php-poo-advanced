<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacoes
{
    private $totalDeBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)  /* se um "funcionario Desenvolvedor" pode ser simplesmente 
    "Funcionario" entao pode ser apresentado atraves dessa funcao, junta-se a classe "ControleDeBonificacoes". Polimorfismo, 
    o conceito teorico de polimorfismo em PHP eh muito extenso, assim nao podendo ser explicado nesse comentario. Aqui o "Funcionario"
    nao pode subir de nivel, porque eh so um funcionario, e nao tem a classe herdada (ex.: "Desenvolvedor"), porque o Desenvolvedor
    pode subir de nivel ("subirDeNivel()") mas o Gerente nao pode.
    Entao o polimorfismo fas com que uma referencia se comporte de varias formas dependendo do seu tipo (pode ser a classe) naquele 
    momento */
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalDeBonificacoes;
    }
}

?>