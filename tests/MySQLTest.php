<?php 

use PHPUnit\Framework\TestCase;

class MySQLTest extends TestCase {

    public function testConnect() {

        //Teste de conexão.
        $sql = MySQL\MySQL::connect();
        $this->assertInstanceOf('PDO', $sql);
    }

}

?>