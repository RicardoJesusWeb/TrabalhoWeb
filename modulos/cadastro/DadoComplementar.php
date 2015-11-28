	<div id="formulario">
	<h1>Cadastro do educando</h1>
	<br />
	<hr />
		<form>
			<fieldset>
				<legend>Dados de internação</legend>	
				<br />			
				<label>Antecedentes criminais</label><br />				
				<textarea name="AntecCrim" rows="3" cols="80"></textarea><br />	
				<label>Tipo de dependência</label><br />
				<textarea name="TpDependencia" placeholder="Informe qual seu tipo de dependência" rows="3" cols="80"/><br />
				<label>Tempo de uso</label><br /><input type="text" name="TempoUso" size="9"/><br />
				<label>Já esteve internado</label><br />				
				<textarea name="AntecCrim" rows="3" cols="80"></textarea><br />					
				<label>Faz/fez uso de medicação:</label><br />				
				<textarea name="UsoMedicacao" rows="3" cols="80"></textarea><br />	
				<label>Possui alergia:</label><br />				
				<textarea name="Alergia" rows="3" cols="80"></textarea><br />	
				<label>Faz dieta alimentar?</label><br />				
				<textarea name="UsoMedicacao" rows="3" cols="80"></textarea>
				<br />	
				
				<label>Batizado</label>
					<label>Sim</label><input type="radio" name="RBatizado" value="sim" /> 
					<label>Não</label><input type="radio" name="RBatizado" value="nao" />
				
				<label>1º Eucaristia</label>
					<label>Sim</label><input type="radio" name="REucaristia" value="sim" /> 
					<label>Não</label><input type="radio" name="REucaristia" value="nao" />
	
				<label>Crismado</label>
					<label>Sim</label><input type="radio" name="RCrismado" value="sim" /> 
					<label>Não</label><input type="radio" name="RCrismado" value="nao" /> <br /><br />
					
				<label>O que gosta de fazer:</label><br />
				<textarea name="PassaTempo" rows="3" cols="80"></textarea>
				<br />
				<br />			
				<input type="submit" value="Enviar" /> <input type="submit" value="Cancelar" />
			</fieldset>
		</form>
	</div>