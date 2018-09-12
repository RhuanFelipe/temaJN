<?php 	

	for ($i=0; $i <= 200; $i++) { 
			$matricula[$i] = rand(1,99999999);

		@$sql[$i] = "INSERT INTO usuario(id_usuario,matricula_usuario,senha_usuario,ativo,nivel_id)VALUES($i,".$matricula[$i].",123,1,3);";
		echo "<br>";
		echo $sql[$i];

	}
 ?>