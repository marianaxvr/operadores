<?php
//if

$qualSuaIdade = 15;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if($qualSuaIdade  < $idadeCrianca) {

echo "Criança";

} else if($qualSuaIdade < $idadeMaior) {

    echo "Adolescente";
} else if ($qualSuaIdade < $idadeIdoso){
echo "Adulto";

} else {

    echo "Idoso";
}
echo"<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";
// condição simples; ? significa "então", : "senão"


?>