<!doctype html>
<html>
  <head>  
    <script src="../js/jquery.min.js"></script>
    <script src="jquery.tablesorter.min.js"></script>
    <script src="jquery.tablesorter.pager.js"></script>
		<link rel="stylesheet" href="custom.css" media="screen" />
  </head>
  <body>
    
    <h1><?php strtoupper($modulo) ?></h1>
    
    <form method="post" action="exemplo.html" id="frm-filtro">
      <p>
        <label for="pesquisar">Pesquisar</label>
        <input type="text" id="pesquisar" name="pesquisar" size="30" />
      </p>
    </form>
    
    <table cellspacing="0" summary="Tabela de dados fictícios">
      <thead>
        <tr>
          <th><input type="checkbox" value="1" id="marcar-todos" name="marcar-todos" /></th>
          <th>ID</th>
          <th>Nome</th>
          <th>Data de nascimento</th>
          <th>Cidade</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" value="1" name="marcar[]" /></td>
					<td>1</td>
          <td>Masuki Oki</td>
          <td>11/06/1949</td>
          <td>Tokyo</td>
          <td>
            <a href="#"><img src="edit.png" width="16" height="16" /></a>
            <a href="#"><img src="delete.png" width="16" height="16" /></a>
          </td>
        </tr> 
      </tbody>
    </table>
    
    <div id="pager" class="pager">
    	<form>
				<span>
					Exibir <select class="pagesize">
							<option selected="selected"  value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option  value="40">40</option>
					</select> registros
				</span>

				<img src="first.png" class="first"/>
    		<img src="prev.png" class="prev"/>
    		<input type="text" class="pagedisplay"/>
    		<img src="next.png" class="next"/>
    		<img src="last.png" class="last"/>
    	</form>
    </div>
    
    <script>
    $(function(){
      
      $('table > tbody > tr:odd').addClass('odd');
      
      $('table > tbody > tr').hover(function(){
        $(this).toggleClass('hover');
      });
      
      $('#marcar-todos').click(function(){
        $('table > tbody > tr > td > :checkbox')
          .attr('checked', $(this).is(':checked'))
          .trigger('change');
      });
      
      $('table > tbody > tr > td > :checkbox').bind('click change', function(){
        var tr = $(this).parent().parent();
        if($(this).is(':checked')) $(tr).addClass('selected');
        else $(tr).removeClass('selected');
      });
      
      $('form').submit(function(e){ e.preventDefault(); });
      
      $('#pesquisar').keydown(function(){
        var encontrou = false;
        var termo = $(this).val().toLowerCase();
        $('table > tbody > tr').each(function(){
          $(this).find('td').each(function(){
            if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
          });
          if(!encontrou) $(this).hide();
          else $(this).show();
          encontrou = false;
        });
      });
      
      $("table") 
        .tablesorter({
          dateFormat: 'uk',
          headers: {
            0: {
              sorter: false
            },
            5: {
              sorter: false
            }
          }
        }) 
        .tablesorterPager({container: $("#pager")})
        .bind('sortEnd', function(){
          $('table > tbody > tr').removeClass('odd');
          $('table > tbody > tr:odd').addClass('odd');
        });
      
    });
    </script>
  </body>
</html>
