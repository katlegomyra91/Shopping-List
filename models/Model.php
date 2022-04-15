<?php

require_once('models/ModelInterface.php');
require_once('models/MysqlConnection.php');

class Model implements ModelInterface
{
    protected string $tableName;
    protected ConnectionInterface $db;

    public function __construct()
    {
        $this->tableName = substr(strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', get_class($this))), 0, -6);
        $this->db = new MysqlConnection();
    }

    public function select(array $columns): array
    {
        $columns = implode(",", $columns);
        $result = $this->db->connection->query("SELECT {$columns} FROM {$this->tableName}");

        if ($this->db->connection->errno) {
            die("Fail Select " . $this->db->connection->error);
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectWhere(array $columns, array $conditionValueColumns): array
    {
        $columns = implode(",", $columns);

        $condition = array();
        foreach ($conditionValueColumns as $key => $value) {
            $condition[] = "{$key} = '{$value}'";
        }
        $condition = implode(" AND ", $condition);

        $result = $this->db->connection->query("SELECT {$columns} FROM {$this->tableName} WHERE {$condition}");

        if ($this->db->connection->errno) {
            die("Fail Select " . $this->db->connection->error);
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insert(array $valueColumns): bool
    {
        $columns = implode("`, `", array_keys($valueColumns));

        $values = array();
        foreach ($valueColumns as $key => $value) {
            $values[] = "'{$value}'";
        }
        $values = implode(", ", $values);

        if ($this->db->connection->query("INSERT INTO {$this->tableName} (`{$columns}`) VALUES ({$values})") === TRUE) {
            return true;
        } else {
            echo "Error " . $this->db->connection->error;
            return false;
        }
    }

    public function update(array $setValueColumns, array $conditionValueColumns): bool
    {
        $set = array();
        foreach ($setValueColumns as $key => $value) {
            $set[] = "{$key} = '{$value}'";
        }
        $set = implode(", ", $set);

        $condition = array();
        foreach ($conditionValueColumns as $key => $value) {
            $condition[] = "{$key} = '{$value}'";
        }
        $condition = implode(" AND ", $condition);

        if ($this->db->connection->query("UPDATE {$this->tableName} SET {$set} WHERE {$condition}") === TRUE) {
            if (mysqli_affected_rows($this->db->connection)) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error to update" . $this->db->connection->error;
            return false;
        }
    }

    public function delete(array $conditionValueColumns): bool
    {
        $condition = array();
        foreach ($conditionValueColumns as $key => $value) {
            $condition[] = "{$key} = '{$value}'";
        }
        $condition = implode(" AND ", $condition);

        //Perform Delete operation
        if ($this->db->connection->query("DELETE FROM {$this->tableName} WHERE {$condition}") === TRUE) {
            if (mysqli_affected_rows($this->db->connection)) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "Error to delete" . $this->db->connection->error;
            return false;
        }
    }
}