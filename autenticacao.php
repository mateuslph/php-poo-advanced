<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();


$umTitular = new Titular(new CPF('323.254.547-98'), 'João da Silva', new Endereco('','','',''));
$autenticador->tentaLogin($umTitular, 'abcd');

$umDiretor = new Diretor('Amanda Luiza', new CPF('876.789.987-58'), 10000);
$autenticador->tentaLogin($umDiretor, '1234');

?>