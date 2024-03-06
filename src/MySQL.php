<?php 

namespace MySQL;

use PDOException, PDO;

class MySQL {

    protected static $pdo;

    public static function connect() {
        try {
            if(self::$pdo === null) {
                self::$pdo = new PDO('mysql:host=localhost;dbname=testes', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            }

            return self::$pdo;
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>