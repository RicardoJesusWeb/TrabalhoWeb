<div id="formulario">
<form>
	<fieldset>
		<legend>Dados da doação</legend>	
		<br />
		<label>Nome: </label><br/>
		<input type="text" name="NomeDoador"  size="40" /><br /><br />
		<label for="job">Documento:</label><br/>
		<select id="select" name="select">
		  <option selected="selected" value="">Selecionar documento</option>
		  <option value="CPF">CPF</option>
		  <option value="CNPJ">CNPJ</option>
		</select>
		<br />
		<br />			
		<label>Informe número : </label><br/>
		<input type="text" name="NumeroCpfCnpj"  size="30" /><br /><br />
		<input type="submit" value="Registrar" /><input type="submit" value="Cancelar"/><br />
	</fieldset>
</form>
</div>