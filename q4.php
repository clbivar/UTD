<?php 
	$l=0;
	$c=0;
	$l=$_POST['u'];
	$c=$_POST['s'];
	echo"SUA TABELA:";

 ?>
<html>




			<table border="1"> 
			 <div class="row">							
							<?php for($k=0; $k<$l;$k++){ ?>
								
									<tr border=12></tr>
								

														
							<?php for($q=0; $q<$c;$q++){ ?>
								
									<td><input type="texto"></td>
								
							<?php } ?>	
								

							<?php } ?>	
				</div>
			</table>

			
</html>

		
	


