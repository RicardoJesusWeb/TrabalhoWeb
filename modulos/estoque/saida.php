<form action="entrada.html" method="post"> 
	<fieldset>
		<legend>Saída</legend> <p><label  >Categoria da Entrada:</label></p> 
		<select name="categorias" id="selecao" required onchange="mostrar( );" >           
			<option value="">Selecione uma categoria</option>
			<option value="doacao">Doação</option>
			<option value="compra">Compra</option>
			<option value="remanufatura">Remanufatura</option> 				
		</select> 
		<p><label >Produto:</label>	</p> 
		<select name="produtos" required >          
			<option value="">Selecione um produto</option>			
		</select> 
		<p><label >Quantidade:</label>	</p>
		<input type="number"  name="quantidade" required="required"> 
	</fieldset> 
	<fieldset id="doacao" class="hide">
		<legend>Doação</legend> 
		<p><label >Fornecedor:</label> </p>
		<input type="text" name="fornecedor" required="required"> 
		<p><label >Informações Adicionais:</label>	</p>
		<textarea name="informacoes"></textarea> 
	</fieldset> 
	<fieldset  id="compra" class="hide">
		<legend>Compra</legend> 
		<p><label >Valor Unitário:</label>	</p>
		<input type="number" step="0.01" name="valor" required="required"> 
		<p><label >Informações Adicionais:</label>	</p>
		<textarea name="informacoes"></textarea> 
	</fieldset> 
	<fieldset id="remanufatura" class="hide">
		<legend>Remanufatura</legend> 
		<p><label >Valor Unitário:</label>	</p>
		<input type="number" step="0.01" name="valor" required="required"> 
		<p><label for="bio">Informações Adicionais:</label>	</p>
		<textarea name="informacoes"></textarea> 
	</fieldset>
	</br>
	<button type="submit">Salvar</button>  
</form> 
