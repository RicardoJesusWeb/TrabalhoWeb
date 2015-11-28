<?php
/*
	session_start();
	if (! isset($_SESSION['id'])){
		header("Location: index.php?erro=1");
	exit;
	}
	if ($_SESSION['nivel'] < 10){
		echo "<script>alert('VocÍ n„o tem permiss„o para acessar est· p·gina!');history.back(-1);</script>";
		exit;
	}
*/	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Area Administrativa - RCCFEIRA</title>
		<link rel="stylesheet" type="text/css" href="css/css_adm.css"/>
	</head>
	<body >
		<div id="adm">
			<div id="topo">
				<?php include('topo.php') ?>
			</div>
			<div id="conteudo">
				<div id="menu">
					<?php include('menu.php') ?>
				</div>
				<div id="formulario">
					<?php include("formulario.php") ?>		
				</div>
			</div>
			<div id="rodape">
				<address> Desenvolvido por Alunos da Unifacs Feira de Santana - Orientação Prof. Ricardo de Jesus</address>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
			 /*function noReload() { 
				$(document).ready(function(){
					$("#adm a").click(function( e ){
						e.preventDefault();
						var href = $( this ).attr('href');
						var url = href;
						if (url.indexOf("?") > 0) {
							query = url.split("?"); param = query[1].split("&");
							for (i=0; i < param.length; i++) { 
								v = param[i].split("="); eval("var "+v[0]+"='"+v[1]+"';"); 
							} 
						} 
						$("#menu").load( "menu.php?modulo="+modulo ); 
						$("#formulario").load( "formulario.php?modulo="+modulo);
							
					 });
				});
			}
			window.onload = function () {
				noReload() ; 
			} */
		</script>
	</body>
</html>