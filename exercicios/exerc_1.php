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
			
			/*	a) array() = Um array é uma coleção de um ou mais objetos, do mesmo tipo, armazenados em endereços adjacentes de memória.
			/*	b) trim — Retira espaço no ínicio e final de uma string*/
			/*	c) substr — Retorna uma parte de uma stringg*/
			/*	d) strtolower — Converte uma string para minúsculas*/
			/*	e) Converte uma string para maiúsculas*/
			/*	f)ucfirst — Converte para maiúscula o primeiro caractere de uma string*/
			/*	g)ucwords — Converte para maiúsculas o primeiro caractere de cada palavra*/
			/*	h)explode — Divide uma string em strings*/
			/*	i)var_dump — Mostra informações sobre a variável*/
			/*	j)implode — Junta elementos de uma matriz em uma string*/
			/*	k)htmlspecialchars_decode — Converte especiais entidades HTML para caracteres*/
			/*	l)join — Sinônimo de implode()*/
			/*	m)isset — Informa se a variável foi iniciada*/
			/*	n)strlen — Retorna o tamanho de uma string*/
			/*	p)getdate — Consegue informações data/hora*/
			/*	q)empty — Informa se a variável é vazia*/
			/*	y)count — Conta o número de elementos de uma variável, ou propriedades de um objeto*/
			/*	z)htmlentities — Converte todos os caracteres aplicáveis em entidades html.*/
			
			
			?>
			<?php
			/*
					//de string para integer
			
  					$str = "10";
   					$num = (int)$str;
			
   					


   					//de string para array
   					
					// Example 1
					$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
					$pieces = explode(" ", $pizza);
					echo $pieces[0]; // piece1
					echo $pieces[1]; // piece2

					// Example 2
					$data = "foo:*:1023:1000::/home/foo:/bin/sh";
					list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
					echo $user; // foo
					echo $pass; // *

					
				

				//de string para array
					
				$array = array('lastname', 'email', 'phone');
				$comma_separated = implode(",", $array);

				echo $comma_separated; // lastname,email,phone

				// Empty string when using an empty array:
				var_dump(implode('hello', array())); // string(0) ""

				
				

				de integer para float

				<?php
			    $f = 0.03;
			    $b = (1 - 0.97);

			    var_dump($f == $b); //result FALSE
				?>

				<?php
			    $f = (float)(string)0.03;
			    $b = (float)(string)(1 - 0.97);

			    var_dump($f == $b); //result TRUE
				?>
			*/

			?>

			
			<fieldset>
			<legend>Formulario de cadastro</legend>
	
	
	<form action ="exerc_2.php" method ="POST">
	<br>
				<input type="hidden" name= "escondido" value="valor do escondido"/> 
				<br>
				Campo 1: <input type="text" name="campo1"/><br>
				<br>
				
				Password: <input type="password" name="senha"  maxlength=6 /><br>
				<br>
				
				Nome: <input type="text" name="nome"/><br> 
				
				Email: <input type="text" name="email" size="20" value=" " />
					<?php echo @$_REQUEST["email"]; ?> 
					
					<br>

				Mensagem: <textarea name="mensagem" cols=8 rows=3></textarea><br>
				<br>
				
				<br>

				Escolha os numeros de sua preferência:<br> 
				<input type="checkbox" name="numeros[]" value="10"/> 10<br>
				<input type="checkbox" name="numeros[]" value="20"/> 20<br>
				<input type="checkbox" name="numeros[]" value="30"/> 30<br>
				<input type="checkbox" name="numeros[]" value="40"/> 40<br>
				<br>
				Qual seu sistema?<br> 
				<br><input type="radio" name="sistema" value="Windows 98"/> Win 98<br> 
				<br><input type="radio" name="sistema" value="Windows 98"/> Linux<br>
				<br><input type="radio" name="sistema" value="Windows 98"/> Mac<br> 
				<br>
				
				<B>Qual seu processador?</B><br> 
				<select name="processador"> <option value="Pentium">Pentium</option><br> 
				<option value="AMD">AMD</option><br>
				<option value="Celeron">Celeron</option><br> 
				</select><br>
				<br>
				<br>
				<button class="btn btn-large btn-primary">Enviar</button>
	
	</fieldset>
	
	
        
			</form>

	
	
	
	
	</body>
	
	
</html>