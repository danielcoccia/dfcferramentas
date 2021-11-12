<?php 
include_once "inc_cabecalho.php" ;
include_once "inc_top.php" ;
include_once '../service/ServiceProdutos.php';
$service = new ServiceProdutos();
$produtoLista = $service->getProdutosPesquisar($_REQUEST);

//print_r($produtoLista);
?>
  <div class="container">
  <div class="row text-center" style="margin:50px ">  
  
  <?php   
  $i=0; 
  while ($lista = $produtoLista->fetch_array() ) {    
    if ($i >=3){        
      echo '<div class="row text-center" style="margin:50px ">';
      $i=0;
    }
    $i++;     
      echo'   
      <div class="col-lg-4" style="width:250">
        <div class="rounded m-1" style="border-width:0px; border-style:solid; border-color: #0780a6;">
          <a  href="produtosDetalhe.php?prod_id='.$lista['id'].'"><img src="../images/produtos/'. $lista['foto'].'" width="200px" height="200px" />
            <!--<hr width="100%"  style="background:#0780a6;"></hr>-->
            <p><b>'. $lista['nome'].'</b></p>
            <p>'.$lista['descricao'].'</p>
            <button type="button" class="btn btn-secondary btn-sm m-1">+</button>
          </a>
        </div>
      </div>';
    
    if ($i >=3){        
      echo '</div>';
      //$i=0;
    }
    
  //echo 'ID: ' . $dados['id'] . '';
  //echo 'Título: ' . $dados['nome'] . '<br>';
  
  }
  if($i < 3){
    echo '</div>';
  }
  //echo 'Registros encontrados: ' . $query->num_rows;
  ?>

  </div>
  
<?php include_once "inc_rodape.php" ?>