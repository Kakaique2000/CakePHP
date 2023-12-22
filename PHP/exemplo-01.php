<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");
if($conn === mysql_connect_error() && mysql_connect_ernno()):
    return "Não foi possivel conectar";
endif;

    /*if(isset($conn)):
        echo ucwords("Conectado com sucesso!");
       
    endif;*/
?>