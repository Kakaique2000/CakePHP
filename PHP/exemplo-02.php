<?php
/** @param Exemplo-02 em PHP: */
$conn = new PDO("mysql:local=localhost;dbname=db_market","root","");
if(isset($conn)):
    echo ucwords("<center><b> Conectado com sucesso ao Banco </b></center>");
endif;
$stmt = $conn->prepare("INSERT INTO estoque () VALUES ()");




?>
