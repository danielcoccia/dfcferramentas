<?php

include_once 'conexao.php';

class ModelProdutos extends Conexao {

    private $em;

    function __construct() {
//parent::__construct(0);
        $this->em = $this->getEntityManager();
    }

    public function getProdutos($paramentros) {

        $sql = "SELECT id,nome,descricao,foto FROM produto where id_categoria=".$paramentros['cat'];
        return $this->em->executeQuery2($sql);
    }

    public function getProdutoDetalhe($paramentros) {

        $sql = "select 
				p.nome,
				p.foto,
				d.descricao,
				d.descricao_tecnica,
				d.instrucao_uso,
				d.composicao,
				d.outras_info,
                d.caracteristicas,
                c.categoria,
                c.id cat_id
				from produto p
				left join detalhes_produtos d on p.id = d.id_produto
                left join categoria c on c.id = p.id_categoria
				where id_produto=".$paramentros['prod_id'];
				//echo $sql;
                //exit();
        return $this->em->executeQuery1($sql);
    }

    public function getProdutosPesquisar($paramentros) {

        $sql =" select";
        $sql.=" p.id, "; 
        $sql.=" p.nome, "; 
        $sql.=" p.descricao, "; 
        $sql.=" p.foto "; 
        $sql.=" from produto p ";
        $sql.=" left join detalhes_produtos d on p.id = d.id_produto ";
        $sql.=" where d.descricao like '%".$paramentros['pesquisa']."%' "; 
        $sql.=" or d.descricao_tecnica like '%".$paramentros['pesquisa']."%' "; 
                        
        return $this->em->executeQuery2($sql);
    }

    public function getProdutosAleatorio($paramentros) {

        $sql.=" select";
        $sql.=" p.id, "; 
        $sql.=" p.nome, "; 
        $sql.=" p.descricao, "; 
        $sql.=" p.foto "; 
        $sql.=" from produto p ";
        $sql.=" left join detalhes_produtos d on p.id = d.id_produto ";
        $sql.=" ORDER BY RAND()  LIMIT 0, 5"; 
                        
        return $this->em->executeQuery2($sql);
    }
    
}
