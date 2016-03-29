<?php

$qtd = 0;
$valor = 388;
$notas = array(100,50,20,10,5,2,1);

foreach($notas as $nota){
    if($valor >= $nota){
        $qtd = intval($valor/$nota);
        $valor -= ($qtd * $nota); 
        echo $qtd . ' nota(s) de ' . $nota . '<br>';
    }
}

?>