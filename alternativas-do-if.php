<?php

$idade = 18;
$nacionalidade = 'brasileira';



if($idade >= 18 && $nacionalidade != 'brasileira'){
    echo 'Seja bem vindo';
}elseif ($idade < 18) {
    echo 'Você não tem acesso a isto';
}elseif ($nacionalidade == 'brasileira') {
    echo 'Em breve estaremos chegando no Brasil';
}
else{
    echo 'Você não tem acesso a isto';
}

echo '<br><hr><br>';

if($idade >= 18 && $nacionalidade != 'brasileira'):
    echo 'Seja bem vindo';

elseif ($idade < 18):
    echo 'Você não tem acesso a isto';
elseif ($nacionalidade == 'brasileira') :
    echo 'Em breve estaremos chegando no Brasil';
else:
    echo 'Você não tem acesso a isto';
endif;

echo '<br><hr><br>';
if(1 == 1)echo '1 é igual a 1';
if(1 == 1){echo '1 é igual a 1';}