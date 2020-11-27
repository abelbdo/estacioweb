<?php
$idade = $_GET['idade'];


if($idade < 18){
    header ("location: http://WWW.GLOBO.COM/"); 
} else { 
    header ("location: http://WWW.UOL.COM.BR/");    
}
?>