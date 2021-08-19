<?php  

	// Recebendo os dados do formulário
	$numeros = $_POST;

	// Variáveis de escopo
	$soma = 0;
	$maior = 0;
	$menor = $numeros;

	
	foreach ($numeros as $numero) {
		$soma = $soma + $numero;
		
		// Maior	
		if($numero > $maior){
			$maior = $numero;
						
		}	
		//$menor = $maior;

           if($numero < $menor){
			  $menor = $numero;
					
		}
		
	}


	
echo "A soma dos 10 números é: " .$soma . "<br>" ;
echo "O maior número é: " .$maior  ."<br>" ;
echo "O menor número é: " . $menor . "<br>" ;


?>