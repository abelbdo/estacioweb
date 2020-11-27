<?php
ini_set('session.gc_maxlifetime', 6);  
session_start(); ?>
<html>
    <head>
        <title>Sessões</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['visitas']))
            $_SESSION['visitas'] = 0;
        ?>
        Esta é a sua visita número
        <?php echo $_SESSION['visitas']++ ?>

        <?php echo session_id(); 
            session_regenerate_id();
        ?>

        <?php
        echo md5('You shall not pass'), "<br>\n";
        ?>
    </body>
</html>