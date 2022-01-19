<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Petropolis', 'Bairro Qualquer', 'Minha Rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma Rua Aí', '100');

echo $umEndereco->cidade . PHP_EOL;
// exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;

?>