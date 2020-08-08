<?php
namespace Models;

use PDO;
use PDOException;

class Connection
{
    private string $connectionString;
    private string $user;
    private string $password;
    private PDO $connection;

    public function __construct(
        string $connectionString,
        string $user = 'root',
        string $password = ''
    ) {
        $this->connectionString = $connectionString;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $this->connection = new PDO(
                $this->connectionString,
                $this->user,
                $this->password
            );

            return $this->connection;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}
