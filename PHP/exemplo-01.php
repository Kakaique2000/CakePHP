<?php

$conn = new PDO("mysql:local=localhost;dbname=dbphp7","root","");
if($conn == Mysqli_connect_ernno()):
    throw new Exception("<center><b>Não foi possivel conectar ao Banco de Dados</b></center>", 1);
else:
    echo strtoupper("<center> <b> Conectado com Sucesso ao Banco de Dados </b> </center>");

endif;
    
$stmt = $conn->prepare("INSERT INTO (deslogin, dessenha) VALUES (:ID , :SENHA)");
// $conn->query("SELECT * FROM tb_usuarios GROUP BY idusuarios");
// $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
// $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
// $stmt = $conn->query()

$login = "user";
$senha = "1234566";

$stmt->bindParam(":ID", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam("ID",$id);
$stmt->execute();
echo ucwords("Inserido  com Sucesso");
echo "<hr>";

// Estrutura do banco de Dados:
/** @param SQL:
 * CREATE DATABASE dbphp7;
 * USE dbphp7;
 * CREATE TABLE tb_usuarios(
* id INT(1)NOT NULL PRIMARY KEY AUTO_INCREMENT,
* deslogin VARCHAR(45) NOT NULL,
* dessenha VARCHAR(255) NOT NULL,
* dtcadastro  CURRENT_TIMESTAMP()
* );
* # FAZENDO UM SELECT NA TABELA tb_usuarios
* SELECT * FROM tb_usuarios ORDER BY idusuarios
*  
*
*
 */

 
?>