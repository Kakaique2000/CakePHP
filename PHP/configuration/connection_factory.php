<?php

require_once 'connection.php';

class ConnectionFactory {
    public static function createConnection(): PDO {
        $connection = new Connection(
            "localhost",
            "db_market",
            3306,
            "root",
            ""
        );

        return $connection->connect();
    }
}

?>