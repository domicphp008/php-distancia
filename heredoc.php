<?php
//header('Content-Type: text/html; charset=utf-8'); 

$nome = 'Domício José';

    $iparos = <<<QQC
    Exemplo de variável definida pela sintaxe heredoc<br />
    É possível expandir variáveis: $nome;
QQC;
    
 echo $iparos;  
