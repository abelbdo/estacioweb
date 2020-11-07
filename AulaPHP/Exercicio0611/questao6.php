<?php
$mes = $_GET['mes'];

switch ($mes) {
    case $mes == 1:
        Echo "Janeiro";
        break;
    case $mes == 2:
        Echo "Fevereiro";
        break;
    case $mes == 3:
        Echo "Março";
        break;
    case $mes == 4:
        Echo "Abril";
        break;
    case $mes == 5:
        Echo "Maio";
        break;
    case $mes == 6:
        Echo "Junho";
        break;
    case $mes == 7:
        Echo "Julho";
        break;
    case $mes == 8:
        Echo "Agosto";
        break;
    case $mes == 9:
        Echo "Setembro";
        break;
    case $mes == 10:
        Echo "Outubro";
        break;
    case $mes == 11:
        Echo "Novembro";
        break;
    case $mes == 12:
        Echo "Dezembro";
        break;
    
    default:
        Echo "Esse mês não existe!";
        break;
}
?>