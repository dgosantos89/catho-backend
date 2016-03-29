<?php
# Desenvolva um programa que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico. Os requisitos são os seguintes:
# - Entregar o menor número de notas possível;
# - Notas disponíveis de R$ 100, 50, 20 e 10;
# - Não é preciso se preocupar com valores quebrados
# Ex: para 388 reais teremos 3 notas de 100, 1 nota de 50, 1 nota de 20, 1 nota de 10, 1 nota de 5, 1 nota de 2 e 1 nota de 1 real.
  
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
