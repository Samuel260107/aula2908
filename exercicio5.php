<?php
$num = 4;
$limite = 30;

while($num < $limite){
    echo "Executando o loop $num <br>";
    if($num === 24){
        echo "Parando o loop";
        break;
    }
    $num += 2;
}
?>