<?php
require './vendor/autoload.php';

use Models\Connection;
use Models\DAOFactory;
use Models\Debug;

$laravelTodoDsn = "mysql:dbname=laravel_todo;host=localhost";
$devsnotesDsn = "mysql:dbname=devsnotes;host=localhost";

$factory = new DAOFactory();

$laravelTodoDao = $factory->create('mysql', new Connection($laravelTodoDsn));
$devsnotesDao = $factory->create('mysql', new Connection($devsnotesDsn));

/**
 * @var \Models\MySQLDAO[]
 */
$daos = [$laravelTodoDao, $devsnotesDao];

/**
 * @var string[]
 */
$tables = ["tasks", "notes"];

$daosRegisters = array_map(
    function (\Models\MySQLDAO $dao, string $table) {
        return $dao->setTable($table)->all();
    },
    $daos,
    $tables
);

$data = [$daosRegisters];

include_once './views/index.php';
