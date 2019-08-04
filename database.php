<?php

use Phalcon\Db\Adapter\Pdo\Factory;

$config =  [
    'host'      => DB_HOST,
    'username'  => DB_USERNAME,
    'password'  => DB_PASSWORD,
    'dbname'    => DB_NAME,
    'port'      => DB_PORT,
    'adapter'   => DB_ADAPTER
];

$database = Factory::load($config);