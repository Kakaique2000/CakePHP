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

SELECT * FROM estoque ORDER BY id_prod;
INSERT INTO estoque (data_vencto, marca, fornecedor, vlr_compra_R$, vlr_venda_R$, N°_NF, lucro_sobre_prod, responsavél, supervisor, cnpj_ie, razão_social)VALUES(01012024, 'Parmalat','Usina de Laticinios Ltda', 50.00, 80.00, 002748, 30.00, 'Andre','Erica', 6945789000140, 'Sacolão da Saude Ltda');
UPDATE estoque SET marca = 'Piracanjuba' WHERE id_prod = 2;
ALTER TABLE estoque ADD lucro_liquido_R$ FLOAT(10);
DELETE FROM estoque WHERE id_prod = 2;
TRUNCATE TABLE estoque;
DROP DATABASE db_market;


*/
/** @param Exemplo-02 em PHP: */
$conn = new PDO("mysql:local=localhost;dbname=db_market","root","");
if($conn == mysqli_connect_error() && mysqli_connect_ernno()):
    return ucwords("Não foi Possivél conectar a base de Dados!") . mysql_connect_error();
else:
    echo "Conectado com sucesso!";
    
endif;

# $stmt = $conn->prepare("INSERT INTO estoque (marca, fornecedor) VALUES (:MARCA, :FORNECEDOR)");



?>
