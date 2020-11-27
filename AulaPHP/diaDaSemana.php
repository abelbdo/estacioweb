<?php
$dia = $_GET['diaSemana'];


switch ($dia) {

    case 'segunda-feira':
        print "Boa Segunda-Feira! <br>";
        break;
    
    case 'terça-feira':
        print "Boa Terça-Feira <br>";
    break;

    case 'quarta-feira':
        print "Boa Quarta-Feira <br>";
    break;

    case 'quinta-feira':
        print "Boa Quinta-Feira <br>";
    break;

    case 'sexta-feira':
        print "Boa Sexta-Feira <br>";
    break;

    case 'sabado':
        print "Bom Sábado <br>";
    break;

    case 'domingo':
        print "Bom domingo <br>";
    break;

    default:
        print "Seja feliz <br>";
        break;
}

?>
<a href="diaDaSemana.html">Retorno</a>