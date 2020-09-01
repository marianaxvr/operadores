<?php
//switch case
$diaDaSemana = 8; //$diaDaSemana = date("w");
// echo $diaDaSemana; -> vai me retornar o valor do dia da semana, abaixo o que o usuário final verá

switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
    break;

    case 1:
        echo "Segunda-feira";
    break;
    // case 2, 3, em diante segue o mesmo padrão
    case 2:
        echo "Terça-feira";
    break;
    case 3:
        echo "Quarta-feira";
    break;
    case 4:
        echo "Quinta-feira";
    break;
    case 5:
        echo "Sexta-feira";
    break;
    case 6:
        echo "Sábado";
    break;

    default:
    echo "Data inválida";
    break;

}
// hoje é terça, ele me retornou terça-feira


?>