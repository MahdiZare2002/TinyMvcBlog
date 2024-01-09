<?php

namespace Application\Model;

use PDO;
use PDOException;

class Model
{
    protected $connection;

    public function __construct()
    {
        global $dbHost, $dbName, $dbUsername, $dbPassword;
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $this->connection = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUsername, $dbPassword);
        } catch (PDOException $e) {
            echo "There is some problem in the connection : " . $e->getMessage();
        }
    }
}
