	<div id="formulario">
	<h1>Cadastro do educando</h1>
	<hr />
	
		<form name="editor" action="DadoComplementar.php"  method="POST" enctype="multipart/form-data" onSubmit="return validarformulario()">
		
			<fieldset>
				<legend>Dados pessoais</legend>	
				<br />
				<label> Nome: </label><br /><input type="text" name="nome" autofocus placeholder="Informe a nome"/> <br />
				<label> Data de nascimento: </label><br /><input type="text" name="DtNascimento" placeholder="Informe a data de nascimento"/><br />
				<label> Estado civil: </label><br /><input type="text" name="EstCivil" placeholder="Ex. solteiro, casado, divorciado..."/><br />
				<label> Naturalidade: </label><br /><input type="text" name="Natural" placeholder="Cidade que nasceu" /><br />
				<label> Número de filhos: </label><br /><input type="text" name="Filhos" placeholder="Informe quantidade de filhos" /><br />				
				<label>Sexo: </label>
					<label>Masculino</label><input type="radio" name="Masculino" value="masculino" checked="checked"/> 
					<label>Feminino</label><input type="radio" name="Feminino" value="feminino" />
				<br />
				<br />
			</fieldset>
			
			<fieldset>
				<legend>Filiação</legend>	
				<br />		
				<label> Pai: </label><br /><input type="text" name="Pai"  placeholder="Informe o nome do pai"/><br />
				<label> Mãe: </label><br /><input type="text" name="Mãe"  placeholder="Informe o nome da mãe"/><br />
				<label> Número de irmãos: </label><br /><input type="text" name="Irmaos" placeholder="Informe quantidade de irmãos" /><br />				
			</fieldset>
			
			<fieldset>
				<legend>Documentação</legend>
				<br />
				<label for="job">Documento:</label><br/>
					<select id="select" name="select">
					  <option selected="selected" value="">Selecionar documento</option>
					  <option value="CPF">CPF</option>
					  <option value="RG">RG</option>
					</select>
				<br />
				<br />
				<label> Endereço: </label><br /><input type="text" name="Endereço" placeholder="Rua, logadouro..."/><br />
				<label> Bairro: </label><br /><input type="text" name="Bairro"  placeholder="Informe o bairro"/><br />
				<label> Numero: </label><br /><input type="text" name="Numero" placeholder="Nº da residência"/><br />
				<label> Cidade: </label><br /><input type="text" name="Cidade" placeholder="Informe a cidade"/><br />				
			</fieldset>
			
			<fieldset>
				<legend>Contato</legend>
					<label> Numero: </label><input type="text" name="Celular"  size="12"placeholder="Celular do contato"/> 
					<label> Fixo: </label><input type="text" name="Fixo" placeholder="Telefone fixo"/><br />	
			</fieldset>	
			<input type="submit" value="Próximo" /> <input type="submit" value="Cancelar"/>			
			
		</form>		
	</div>