<?php

namespace Application\Model;

use PDO;
use PDOException;

class Model
{
    protected $connection;

    public function __construct()
    {
        if (!isset($connection)) {
            global $dbHost, $dbName, $dbUsername, $dbPassword;
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            try {
                $this->connection = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUsername, $dbPassword);
            } catch (PDOException $e) {
                echo "There is some problem in the connection : " . $e->getMessage();
            }
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function query($query, $values = null)
    {
        try {
            if ($values = null) {
                return $this->connection->query($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
                return $stmt;
            }
        } catch (PDOException $e) {
            echo 'there is some error in query' . $e->getMessage();
        }
    }

    protected function execute($query, $values = null)
    {
        try {
            if ($values = null) {
                $this->connection->exec($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
            }
            return true;
        } catch (PDOException $e) {
            echo 'There is some error in execute' . $e->getMessage();
            return false;
        }
    }

    protected function closeConnection(){
        $this->connection = null;
    }
}
