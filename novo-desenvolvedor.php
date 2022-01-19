<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$desenvolvedor = new Desenvolvedor('Sandra Antunes', new CPF('425.645.646-98'), 2000);
echo $desenvolvedor->nome;

?>