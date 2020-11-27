<?php

date_default_timezone_set('America/Sao_Paulo');
$ts = mktime(12,30,12,3,18,2010);
echo strftime("O timestamp $ts equivale a %d/%b/%Y, %T");
?>