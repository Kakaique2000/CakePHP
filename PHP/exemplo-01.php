<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");
if(isset($conn)):
    echo ucwords("<center> Conectado com sucesso!</center>");

endif;

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = 'josé';
$senha = 'chocolate';

# vamos fazer um bindParam para cada um das variaveis;
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);

$stmt->execute();

echo "Inserido OK!";

?>