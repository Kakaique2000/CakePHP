<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");
if($conn == Mysqli_connect_ernno()):
    throw new Exception("<center><b>Não foi possivel conectar ao Banco de Dados</b></center>", 1);
else:
    echo strtoupper("<center> <b> Conectado com Sucesso ao Banco de Dados </b> </center>");

endif;
    
?>