<?php
$velocidade = 45;

if($velocidade >= 41 && $velocidade <= 50){
    echo "Velocidade correta $velocidade Km/h";
    }else if($velocidade <= 40){
    echo "Atenção à velocidade $velocidade Km/h";
    }else{
    echo "Multa";
    }
?>