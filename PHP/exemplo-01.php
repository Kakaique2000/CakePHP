<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");


    if(isset($conn)):
        echo ucwords("Conectado com sucesso!");
       
    endif;
?>