<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorDeVideo};
use Alura\Banco\Service\ControleDeBonificacoes;

$umDesenvolvedor = new Desenvolvedor('Mateus Pereira', new CPF('123.123.123-34'), 1000);
$umDesenvolvedor->sobeDeNivel();

$umGerente = new Gerente('Patrícia Santos', new CPF('122.122.122-32'), 3000);
$umDiretor = new Diretor('João Fernandes', new CPF('144.155.166-37'), 5000);
$umEditor = new EditorDeVideo('Ana Lima', new CPF('445.556.778-89'), 1500);

$controlador = new ControleDeBonificacoes();  // polimorfismo, veja classe "ControleDeBonificacoes"
$controlador->adicionaBonificacaoDe($umDesenvolvedor);  // polimorfismo
$controlador->adicionaBonificacaoDe($umGerente);  // polimorfismo
$controlador->adicionaBonificacaoDe($umDiretor);  // polimorfismo
$controlador->adicionaBonificacaoDe($umEditor);  // polimorfismo

echo $controlador->recuperaTotal();

?>