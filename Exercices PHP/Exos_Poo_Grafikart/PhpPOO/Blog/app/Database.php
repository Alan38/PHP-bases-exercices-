<?php

namespace App;

use \PDO;

class Database {
    
    private $dbName;
    private $dbUser;
    private $dbPass;
    private $dbHost;
    private $pdo;
    
    public function __construct($dbName, $dbUser = 'root', $dbPass = 'alan38160', $dbHost = 'localhost') {
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbHost = $dbHost;
    }
    
    private function getPDO() {
        
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . '', $this->dbUser , $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
    }
    
    public function query($statement, $className) {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $className);
        return $datas;
    }
}

?>