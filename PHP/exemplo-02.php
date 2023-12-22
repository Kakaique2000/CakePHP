<?php

/*
Banco de Dados:

CREATE DATABASE db_market;
USE db_market;
CREATE TABLE estoque(
id_prod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
data_vencto VARCHAR(8) NOT NULL,
marca VARCHAR(50) NOT NULL,
fornecedor VARCHAR(50) NOT NULL,
vlr_compra_R$ FLOAT(10) NOT NULL,
vlr_venda_R$ FLOAT(10) NOT NULL,
N°_NF INT(20) NOT NULL,
lucro_sobre_prod FLOAT(10) NOT NULL,
responsavél VARCHAR(30),
supervisor VARCHAR (30),
cnpj_ie INT(35) NOT NULL,
razão_social VARCHAR(50)
);
*/
/** @param Exemplo-02 em PHP: */
$conn = new PDO("mysql:local=localhost;dbname=db_market","root","");
if(isset($conn)):
    echo ucwords("<center><b> Conectado com sucesso ao Banco </b></center>");
endif;
$stmt = $conn->prepare("INSERT INTO estoque () VALUES ()");




?>
