	<?php  
	
	 	$modulo="inicio"; 
	
		if(isset($_GET["modulo"] )){
			$modulo = $_GET["modulo"]; 
		}
		switch ($modulo) {
			case "cadastro":
				$menu = array(
					"Inicio" => "index_adm.php",
					"Setor Pessoal" => "index_adm.php?modulo=".$modulo."&href=".$modulo.".php"	,
					"Cadastro de Recuperando" => "index_adm.php?modulo=".$modulo."&href=cadastrorecuperando.php",
					"Lançar Receita" => "index_adm.php?modulo=".$modulo."&href=ireceita.php",
					"Lançar Titulo" => "index_adm.php?modulo=".$modulo."&href=ititulo.php",
					"Listar Despesa" => "index_adm.php?modulo=".$modulo."&href=despesa.php",
					"Listar Receita" => "index_adm.php?modulo=".$modulo."&href=receita.php",
					"Listar Titulo" => "index_adm.php?modulo=".$modulo."&href=titulo.php"	
				);
				break;
			case "financeiro":
				$menu = array(
					"Inicio" => "index_adm.php",
					"Financeiro" => "index_adm.php?modulo=".$modulo."&href=".$modulo.".php"	,
					"Lançar Despesa" => "index_adm.php?modulo=".$modulo."&href=idespesa.php",
					"Lançar Receita" => "index_adm.php?modulo=".$modulo."&href=ireceita.php",
					"Lançar Titulo" => "index_adm.php?modulo=".$modulo."&href=ititulo.php",
					"Listar Despesa" => "index_adm.php?modulo=".$modulo."&href=despesa.php",
					"Listar Receita" => "index_adm.php?modulo=".$modulo."&href=receita.php",
					"Listar Titulo" => "index_adm.php?modulo=".$modulo."&href=titulo.php"	
				);
				break;
			case "estoque":
				$menu = array(
					"Inicio" => "index_adm.php",
					"Estoque" => "index_adm.php?modulo=".$modulo."&href=".$modulo.".php"	,
					"Produto" => "index_adm.php?modulo=".$modulo."&href=produto.php",
					"Entrada" => "index_adm.php?modulo=".$modulo."&href=entrada.php",
					"Saida" => "index_adm.php?modulo=".$modulo."&href=saida.php"
				);
				break; 
			default:
				$menu = array(
					"Inicio" => "index_adm.php"				
				);
				break;	
		}
		if($modulo!="inicio"){ ?>
			<ul>
				<li>Menu</li><br/>  
							
				<?php foreach ($menu as $nome => $link ) { ?>
						<li><a href="<?php echo $link; ?>" title="<?php echo $nome; ?>"> <?php echo $nome; ?></a></li>
				<?php }  ?> 
	
			</ul>
	<?php } ?>
	