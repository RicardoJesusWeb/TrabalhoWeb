<form action="#" method="post"> 
	<fieldset>
		<legend>Lancamentos de Receita</legend> 
	 	<p><label  >Categoria:</label>
		<select name="Tipo" id="selecao" required onchange="mostrar( );" >
			<option value="">Selecione</option>
			<option value="1"> Receita com Doações Financeiras </option>
			<option value="2"> Receita com Shows da Banda </option>
			<option value="3"> Receita com Vendas de Produtos </option>
		</select>
		<p><label  >Titulo:</label>
		<select name="categorias" required>   
			<option value="" selected="selected">Selecione</option>
		</select>
	</fieldset>
	
	<fieldset id="1" class="hide">
		<p><label  >Doador:</label>
		<select name="Tipo" >
			<option value="">Selecione a doador</option>
			<option value="1"> doador teste </option>
		</select>
	</fieldset>
	<fieldset>
		<p><label  >Data:</label>
		<input type="date" name="data" required="required"/>
		<p><label  >Valor:</label>
		<input type="number" name="valor" required="required"/>
		<p><label  >Descrição:</label>
		<textarea name="descricao"></textarea>
	</fieldset>
	</br>
	<button type="submit">Salvar</button>  
</form> 

