<?php

require_once 'autoload.php';

/*  usando o autoload nao a necessidade de fazer o "require_once" para cada classe e na ordem correta
require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';
require_once 'src/Modelo/Funcionario.php';
*/

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

$endereco = new Endereco('Petropolis', 'Um Bairro', 'Minha Rua', '71B');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('São Paulo', 'Jardins', 'Rua 12', '109');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

echo $primeiraConta->transfere(50,$outra) . PHP_EOL;
var_dump($outra);
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$novoFuncionario = new Funcionario('Vinicios', new CPF('123.456.789-10'), 'Desenvolvedor');
var_dump($novoFuncionario);

?>