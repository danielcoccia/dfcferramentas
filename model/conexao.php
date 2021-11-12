<?php
class Conexao {

    private $usuario;
    private $password;
    private $db;
    private $host;
    private $charSetCod;
    static private $entityManager;
    private $connection;
    const PRODUCAO = 1;
    const DESENV = 2;

    public static function getEntityManager($ambiente = self:: PRODUCAO) {
        if (!isset(self::$entityManager)) {
            return self::$entityManager = new Conexao($ambiente);
        }
        return self::$entityManager;
    }

    function __construct($ambiente) {

        switch ($ambiente) {
            case self::PRODUCAO:
            	$this->host = 'dfcferramentas.mysql.dbaas.com.br';
                $this->db = 'dfcferramentas';
                $this->usuario = "dfcferramentas";
                $this->password = "dfc2412";
            break;
            
            case self::HOMOLOG:
                $this->host = 'localhost';
                $this->db = 'misterlimpe';
                $this->usuario = "root";
                $this->password = "";
            break;
        }

        $this->setConnection1();
    }

    private function getConnection1() {
        return $this->connection;
    }

    private function setConnection1() {
        $this->connection = new MySQLi($this->host, $this->usuario, $this->password , $this->db);
        	if($this->connection->connect_error){
   				echo "Desconectado! Erro:"  . $this->connection->connect_error;
			}
    }

    public function executeQuery1($sql) {
        
        $conn = $this->getConnection1();
        $resp = $conn->query($sql);
        $dados = $resp->fetch_array();
        return $dados;
    }

    public function executeQuery2($sql) {
        $conn = $this->getConnection1();
        $resp = $conn->query($sql);        
        return $resp;
    }
}
