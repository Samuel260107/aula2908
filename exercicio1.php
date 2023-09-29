<?php 
//5 É MAIOR QUE 2?
$numero = 5;
$numero1 = 2;
//ROBSON É DIFERENTE DE PEDRO
$nome = "ROBSON";
$nome1 = "PEDRO";
//12 é menor ou igual a 11
$num = 12;
$num1 = 11;

if($numero > $numero1){
    echo "É verdadeiro $numero é maior que $numero1";
} else{
    echo "É falso";
}

if($nome != $nome1){
    echo "<br> $nome é diferente de $nome1";
} else{
    echo "$nome é igual de $nome1";
}
if($num <= $num1){
    echo "<br> $num é igual ou menor a $num1";
}else{
    echo "<br> $num NÃO é igual ou menor a $num1";
}


?>