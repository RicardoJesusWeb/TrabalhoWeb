<form action="#" method="post"> 
	<fieldset>
		<legend>Cadastro de Titulos</legend> 
		<p><label > Categoria:</label>
		<select name="Tipo" required="required">
			<option value="" selected="selected">Selecione</option>
			<option value="1"> Títulos à pagar </option>
			<option value="2"> Títulos à Receber </option>
		</select>
		<p><label >Nome do Titulo:</label>
		<input name="nome" type="text" required="required"/>
		<p><label >Data Inicial:</label> 
		<input type="date" name="data" required="required"/>
		<p><label >Valor Total:</label>	 
		<input type="number" name="valor" required="required"/>
		<p><label >Quantidade de Parcelas do Título:</label>
		<input type="number" name="qtde_parcela" required="required"/>
		<p><label >Descrição:</label>
		<textarea name="descricao"></textarea>
	</fieldset>
	</br>
	<button type="submit">Salvar</button>  
</form>


