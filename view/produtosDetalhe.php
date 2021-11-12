<?php 
include_once "inc_cabecalho.php" ;
include_once "inc_top.php" ;

include_once '../service/ServiceProdutos.php';
$service = new ServiceProdutos();
$produtoDetalhe = $service->getProdutoDetalhe($_REQUEST);
//print_r($produtoDetalhe);
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">  
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	$(document).ready(function(){ 		
 		$( "#accordion" ).accordion();
 		 collapsible: false;
	});
</script>

<div class="container">
	<div class="row text-center" style="margin:5px "> <a href="produtos.php?cat=<?=$produtoDetalhe['cat_id']?>"> <?=$produtoDetalhe['categoria']?> </a> &nbsp;> <?=$produtoDetalhe['nome']?></div>	
	<div class="row" style="margin:50px ">

		<div class="col-md-5">
			<img src="../images/produtos/<?=$produtoDetalhe['foto']?>" width="300px" />
		</div>

		<div class="col-md-6">

			<div class="h4"><?=$produtoDetalhe['nome']?></div>
			
			<div class="lead"><?=$produtoDetalhe['descricao']?></div>
			
			<div><hr width="100%" ></hr></div>

			<div style="font-family: 'CenturyGothic'"><?=$produtoDetalhe['descricao_tecnica']?></div>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="text-muted">Descri&ccedil;&atilde;o complementar</div>
			<div><hr width="100%" ></hr></div>

			<div id="accordion" style="margin: 30px;font-family:CenturyGothic" >

			<?php if($produtoDetalhe['caracteristicas']){?>
				<h3>Caracter&iacute;sticas</h3>
				<div><?=$produtoDetalhe['caracteristicas']?></div>
			<?php } ?>

			<?php if($produtoDetalhe['instrucao_uso']){?>
				<h3>Como usar</h3>
				<div><?=$produtoDetalhe['instrucao_uso']?></div>
			<?php } ?>

			<?php if($produtoDetalhe['composicao']){?>
				<h3>Composi&ccedil;&atilde;o</h3>
				<div><?=$produtoDetalhe['composicao']?></div>
			<?php } ?>

			<?php if($produtoDetalhe['outras_info']){?>
				<h3>Outras Informa&ccedil;&otilde;es</h3>
				<div><?=$produtoDetalhe['outras_info']?></div>
			<?php } ?>
			
			</div>
		</div>
	</div>
</div>
<?php include_once "inc_rodape.php" ?>