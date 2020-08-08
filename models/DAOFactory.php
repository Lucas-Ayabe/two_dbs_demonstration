<?php
namespace Models;

use Exception;

class DAOFactory
{
    public static function create($type, Connection $connection)
    {
        switch ($type) {
            case 'mysql':
                return new MySQLDAO($connection);
            default:
                throw new Exception('Wrong DAO type passed.');
        }
    }
}
