<?php

include_once '../model/ModelProdutos.php';

class ServiceProdutos {

    private $model;

    function __construct() {
        $this->model = new ModelProdutos();
    }

    function getProdutos($paramentros) {
        return $this->model->getProdutos($paramentros);
    }
    
    function getProdutoDetalhe($paramentros) {
        return $this->model->getProdutoDetalhe($paramentros);
    }

    function getProdutosPesquisar($paramentros) {
        return $this->model->getProdutosPesquisar($paramentros);
    }

    function getProdutosAleatorio($paramentros) {
        return $this->model->getProdutosAleatorio($paramentros);
    }

    
    
}
