<?php
namespace Models;

use Contracts\IDAO;
use Exception;
use PDO;

class MySQLDAO implements IDAO
{
    private PDO $connection;
    private string $table;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection->connect();
    }

    public function setTable(string $table): MySQLDAO
    {
        $this->table = $table;
        return $this;
    }

    public function all(): array
    {
        if (!isset($this->table)) {
            throw new Exception("Set a table first.");
        }

        $sql = "SELECT * FROM {$this->table}";
        $sql = $this->connection->prepare($sql);
        $sql->execute();

        return $sql->fetchAll();
    }
}
