<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");
if(isset($conn)):
    echo ucwords("<center> Conectado com sucesso!</center>");

endif;

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = 'josé';
$senha = 'chocolate';
$id = 2; // O id e igual a 02 no registro do banco;

# vamos fazer um bindParam para cada um das variaveis;
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Inserido OK!";

?>