<?php

require_once '../configuration/connection_factory.php';

abstract class BaseDAO {
    protected $conn;
    
    # Bonus que ele vai ganhar com este metodo construtor() quando herda;
    protected function __construct() {
        $this->conn = ConnectionFactory::createConnection();
    }
    # vão ser diferentes pra cada:
    public abstract function create();
    public abstract function delete();
    public abstract function update();
    public abstract function select();

}


?>