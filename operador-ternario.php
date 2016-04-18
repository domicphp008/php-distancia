<?php
$acesso = 0;
echo 'usuario ';
echo($acesso > 0) ? 'registro' : 'não registrado';

echo '<br><hr><br>';
if ($acesso > 0){
    echo 'usuario registrado';
}else{
    echo 'usuario não registrado';
}