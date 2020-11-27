<?php
$nota = $_GET["media"];

if ($nota >= 7) {
    print "Parabéns, você foi aprovado! <br>";

} else {
    print "Você terá que fazer aulas de recuperação.";
}

print "Sua nota final foi: " .$nota;

?>