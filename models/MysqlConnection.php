<?php

require_once("models/ConnectionInterface.php");

class MysqlConnection implements ConnectionInterface
{
    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "1theG0spel1", "rr_shopping_list");

        // Error handling
        if (@mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . @mysqli_connect_error(),
                E_USER_ERROR);
        }
    }

    public function __destruct()
    {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }
}