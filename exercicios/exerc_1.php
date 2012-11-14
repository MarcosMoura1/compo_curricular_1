<?php
	$title="Site.com";
	$subtitle="Feito com PHP";
	$nome1 = "Fulano";
	$nome2 = "Fulana"; 
	$nome3 = "Ciclano"; 
	$sexo1 = "M"; 
	$sexo2 = "F"; 
	$sexo3 = "M";
?>

<!Doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>
			<?php
			echo $title."-".$subtitle;
			?>
		</title>
	</head>
	<body>
	
		<h1>
			<div id = "Conteúdo">
				<?php
				//exercicio 1
					echo $nome1.", ".$nome2.", ".$nome3.", ".$sexo1.", ".$sexo2.", ".$sexo3." "; 
				?>
			</div>
		</h1>
		<p>
			<?php
			//exercicio 2
			
				if($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){
					echo "<p>equipe é formada por meninos</p>";
				}else if($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F"){
					echo "<p>equipe é formada por meninas</p>";
				}else{
					echo "<p>equipe mista</p>";
				}
			?>
		
		</p>
			<?php
			//exercicio 3
				$qtd = 4;
			
				switch($qtd){
					case 0:
						echo "Nenhum Produto Cadastrado";
						break;
					case 1:
						echo "Você possui um produto cadastrado";
						break;
					case 2:
						echo "Você possui varios produtos cadastrados";
						break;
					case 3:
						echo "Você possui varios produtos cadastrados";
						break;
					
					default:
					echo "Cadastro Invalido";
					break;
				}
			?>
			
			<?php
			//exercicio 4-a
				for($i=1; $i<=25; $i++){
				
					echo "<p>Lactobacilos vivos tambem possuem sentimentos</p>";
					
				}
			?>
			
			<?php
			//exercicio 4-b
				$i=0;
				$num=3;
				while($i <= $num){
					echo $i.",";
					$i++;
				}
			?>
			
		<p>	
			<?php
			//exercicio 4-c
			
			$valor1=5;
			$valor2=10;
			
				while($valor1 < $valor2){
					$valor1++;
					if($valor1<$valor2){
						echo $valor1."<p> ";
					}
				}
			
			?>
			
		</p>
		
			<?php
			//exercicio 4-d
				$valor1=3;
				$valor2=5;
				$soma=0;
				for($i=0;$i<$valor1;$i++){
					$soma=$soma+$valor2;
				}
				echo $soma." ";
			?>
		<p>
			<?php
			//exercicio 5
				$valor1=3;
				$valor2=5;
				$multiplica=0;
				
				 $multiplica=$valor1 * $valor2;
				
				echo $multiplica." ";
				
			?>
		</p>
			
		
			<?php
			//exercicio 6
				$imprime="Marcos de Moura";
				
				echo "<p>$imprime </p>";
			?>
			
			<?php
			//exercicio 7
			
			/*a) array() = 
			
			
			*/
			
			
			?>
		
		<div id ="rodapé">
			&reg copyright Site.com <?php echo date("Y");?>
	
		</div>
	</body>
	
</html>