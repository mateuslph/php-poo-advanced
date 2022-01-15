<?php

spl_autoload_register(function(string $nomeCompletoDaClasse)  // PSR-4 recomenda a forma de fazer autoload
{
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);  /* o "DIRECTORY_SEPARATOR" fara o correto barramento
    para acesso as pasta, tanto no Windows como no Linux, e Mac */
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

?>