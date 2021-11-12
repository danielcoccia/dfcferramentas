<?php

include_once 'conexao.php';

class ModelMenu extends Conexao {

    private $em;

    function __construct() {
//parent::__construct(0);
        $this->em = $this->getEntityManager();
    }

    public function getMenu() {    

        $sql = "SELECT id, categoria FROM categoria";
        //echo $sql;
		//exit();
        return $this->em->executeQuery2($sql);
    }

}
