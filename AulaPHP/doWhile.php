<?php
$contador = $_GET['numero'];

/*do {
    print "<H$contador>Hello World!</H$contador>\n";
    $contador++;
} while ($contador<= 6);
*/

for(; $contador<=10;$contador++) {
print "contador = $contador <br>";
    if($contador == 5){
    break;
    }
}
?>