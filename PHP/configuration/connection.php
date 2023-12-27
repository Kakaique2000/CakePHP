<?php

class Connection {

    private string $hostname;
    private string $db_name;
    private string $port;
    private string $user;
    private string $pass;
 
    public function __construct(
        string $hostname,
        string $db_name,
        string $port,
        string $user,
        string $pass
    ) {
        $this->hostname = $hostname;
        $this->db_name = $db_name;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect(): PDO {
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8mb4";
        $pdo = new PDO(
            $dsn, 
            $this->username,
            $this->password
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # caso haja algum problema de conexão vamos setar o atributo ao inves de um If e else;


        return $pdo;
    }

}

?>