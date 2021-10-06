<?php

namespace Model;

use PDO;
use PDOException;

class DB {

    private string $host = 'localhost';
    private string $db = 'Cv';
    private string $user = 'dev';
    private string $password = 'dev';

    private static?PDO $pdo = null;

    /* DB construct */
    public function__construct() {
    try {
        self::$pdo = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch (PDOException $exception) {
        echo "Erreur de connexion: " . $exception->getMessage();
    }

    /**
     * Return the database PDO connection
     * @return PDO|null
     */
    public static function getInstance(): ?PDO {
        if(null === self::$pdo) {
            new self();
        }
        return self::$pdo;
    }

    /**
     * Return string to have secure data to insert into the BDD.
     * @param $data
     * @return string
     */

    public static function secureData($data): string {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = addslashes($data);
        return trim($data);
    }


    /**
     * Return true if at least one parameter is null !
     * @param mixed ...$data
     * @return bool
     */
    public static function isNull(...$data): bool {
        foreach($data as $param) {
            if(is_null($param)) {
                return true;
            }
        }
        return false;
    }

    /**  Avoid clone by another dev  */
    public function __clone() {}

}