<?php

require_once 'base_dao.php';

class EstoqueDAO extends BaseDAO {

    public ?string $id_prod;
    public ?string $dt_cadastro;
    public string $data_vencto;
    public string $marca;
    public string $fornecedor;
    public float $vlr_compra;
    public float $vlr_venda;
    public string $numero_nota_fiscal;
    public float $lucro_sobre_prod;
    public ?string $responsavel;
    public ?string $supervisor;
    public int $cnpj_ie;
    public ?string $razao_social;

    public function __construct(
        ?string $id_prod,
        ?string $dt_cadastro,
        string $data_vencto,
        string $marca,
        string $fornecedor,
        float $vlr_compra,
        float $vlr_venda,
        string $numero_nota_fiscal,
        float $lucro_sobre_prod,
        ?string $responsavel,
        ?string $supervisor,
        int $cnpj_ie,
        ?string $razao_social
    ) {
         parent::__construct(); # estou garantindo que vou fazer a conexão com o banco

         $this->id_prod = $id_prod;
         $this->dt_cadastro = $dt_cadastro;
         $this->data_vencto = $data_vencto;
         $this->marca = $marca;
         $this->fornecedor = $fornecedor;
         $this->vlr_compra = $vlr_compra;
         $this->vlr_venda = $vlr_venda;
         $this->numero_nota_fiscal = $numero_nota_fiscal;
         $this->lucro_sobre_prod = $lucro_sobre_prod;
         $this->responsavel = $responsavel;
         $this->supervisor = $supervisor;
         $this->cnpj_ie = $cnpj_ie;
         $this->razao_social = $razao_social;
    }

    public function create(): EstoqueDAO {
        
        $stmt = $this->conn->prepare(
            "INSERT INTO estoque (data_vencto, marca, fornecedor, vlr_compra_R$, vlr_venda_R$, N°_NF, lucro_sobre_prod, responsavél, supervisor, cnpj_ie, razão_social)
             VALUES(
                :data_vencto
                :marca
                :fornecedor
                :vlr_compra
                :vlr_venda
                :numero_nota_fiscal
                :lucro_sobre_prod
                :responsavel
                :supervisor
                :cnpj_ie
                :razao_social);
            ");

        $stmt->bindParam(":data_vencto", $this->data_vencto);
        $stmt->bindParam(":marca", $this->marca);
        $stmt->bindParam(":fornecedor", $this->fornecedor);
        $stmt->bindParam(":vlr_compra", $this->vlr_compra);
        $stmt->bindParam(":vlr_venda", $this->vlr_venda);
        $stmt->bindParam(":numero_nota_fiscal", $this->numero_nota_fiscal);
        $stmt->bindParam(":lucro_sobre_prod", $this->lucro_sobre_prod);
        $stmt->bindParam(":responsavel", $this->responsavel);
        $stmt->bindParam(":supervisor", $this->supervisor);
        $stmt->bindParam(":cnpj_ie", $this->cnpj_ie);
        $stmt->bindParam(":razao_social", $this->razao_social);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Houve um erro ao criar novo registro de estoque". $e->getMessage() . $e->getLine());
        }

        return $this;
    }


    public function delete() {}
    public function update() {}
    public function select() {}

}

/* 
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
razão_social VARCHAR(50) */

?>