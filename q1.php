 <?php 

     	$nome = $_POST['nome'];
     	$email = $_POST['email'];
     	$telefone = $_POST['telefone']; 
		$end = $_POST['end'];
		$idade = $_POST['idade'];
     	$mensagem = $_POST['mensagem'];

	echo "
		<strong>
			Tabela
		<hr>
		<table border=6>
			<tr>
				<th> Nome </th>				
				<th> Email </th>				
				<th> Telefone </th>
				<th> Endereço </th>
				<th> Idade </th>						
				<th> Mensagem </th>
			</tr>
			<tr>
				<td>$nome </td>				
				<td>$email </td>
				<td>$telefone </td>	
				<td>$end </td>
				<td>$idade </td>
				<td>$mensagem </td>				
			</tr>
							
		</table>

		</strong>	";		

?>