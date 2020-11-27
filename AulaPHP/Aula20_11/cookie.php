<?php
$b = setcookie('contador', '0');

?>

<html>
<head>
    <title>COokies, pagina 1</title>
    <body><?php
    if($b)
        echo "Cookie enviado com sucesso";
    else
        echo "Erro ao enviar o cookie";
        ?></body>
</html>