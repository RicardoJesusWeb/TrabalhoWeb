<form action="#" method="post"> 
	<fieldset>
		<legend>Lancamentos de Despesa</legend> 
	 	<p><label  >Categoria:</label>
		<select name="categorias" required>   
			<option value="" selected="selected">Selecione</option>
			<option value="1"> Compras (Material de Consumo) </option>
			<option value="2"> Outros </option>
		</select>
		<p><label  >Titulo:</label>
		<select name="categorias" required>   
			<option value="" selected="selected">Selecione</option>
		</select>
		<p><label  >Data:</label>
		<input type="date" name="data"/>
		<p><label  >Valor:</label>
		<input type="number" name="valor"/>
		<p><label  >Descrição:</label>
		<textarea name="descricao" ></textarea>
	</fieldset>
	</br>
	<button type="submit">Salvar</button>  
</form> 
