<!DOCTYPE html>

# Dado um quadrado de tamanho Z faça um script que imprima um X formado por X do tamanho deste quadrado

<head>
    <meta charset="utf-8">
    <title>Teste X</title>
</head>

<body>
    <div class="Entrada">
        <form action="?tamanho=<?php $acao ?>&corPrincipal=<?php $cp1 ?>&corSecundaria=<?php $cp2 ?>" method="get">
            <label>Tamanho do quadro: </label><input id="tamanho" type="text" class="txt" name="tamanho" value=""><br>
            <label>Cor da diagonal principal: </label><input id="CorPrincipal" type="text" class="txt" name="corPrincipal" value=""><br>
            <label>Cor da diagonal secundária: </label><input id="CorSecundaria" type="text" class="txt" name="corSecundaria" value=""><br>
            <input type="submit" class="submit button" value="Ok"/>
        </form>
    </div>
</body>

<?php
$tamanho = $_GET['tamanho'];
$cp1 = $_GET['corPrincipal'];
$cp2 = $_GET['corSecundaria'];

for ($coluna=0; $coluna < $tamanho; $coluna++) { 
    for ($linha=0; $linha < $tamanho; $linha++) { 
        if($coluna == $linha){
            echo '<font size=16px color="' . $cp1 . '">x';
        }
        elseif ($tamanho-$linha == $coluna+1) {
            echo '<font size=16px color="' . $cp2 . '">x';
        }
        else{
            echo '&nbsp; &nbsp;';   
        }
    }
    echo '<br>';
}

?>
