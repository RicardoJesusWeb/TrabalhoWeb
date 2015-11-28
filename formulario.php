<?php
 	if(isset($modulo, $_GET["href"] )){
		$href = "modulos/".$modulo."/".$_GET["href"]; 
  	}else {
	  	$href = "modulos/".$modulo."/".$modulo.".php" ;  
  	}
  	 
  	if(!file_exists($href)){ 
	   $href= "filenotfound.php";
  	}
  	include( $href) ;
 		
 	?>
 	
 	<script> 
	 	
	 	/*funcao para ocultar e desocultar elementos do formulario de acordo com a categoria selecionada.
	 	  *para funcionar é necessario a tag select esta com o id="selecao" e onchange="mostrar();"
	 	  *e a tag que vai ficar oculta com a class="hide"
	 	  *ele pega o value da selecao e pega o elemento com o mesmo id e mosrtra.
	 	  */
 		function ocultar() { 
 			var elements =  document.getElementsByClassName('hide');
 			for (var i = 0; elements.length > i; i++ ) {
 				elements[i].style.display = 'none';
 			} 
 		}
 	
 		function mostrar() { 
 			ocultar();
 			var categorias = document.getElementById("selecao");   
 			document.getElementById(categorias.options[categorias.selectedIndex].value).style.display = 'block';
 		}
 		ocultar();
 	</script>

