<?php 
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];
	$base = $_POST['ValorBase'];
	$grado = $_POST['grado'];
	$curso = $_POST['curso'];
	$materia = $_POST['materia'];

	if ($grado == 'Primero') {
		$base=$base + 35000;
	}elseif ($grado == 'Segundo') {
		$base = $base + 70000;
	}


	if ($materia =='Danzas'){
		$base =($base * 0.20)+$base;
	}elseif ($materia =='Teatro') {
		$base = ($base *0.25)+$base;
	}elseif ($materia =='Musica') {
		$base = ($base*0.30)+$base; 
	}else{

		$base =($base*0.35)+$base;
	}

echo "<strong>El valor total es:</strong>".$base."<br/>";
echo "<strong>Para el alumno:</strong> ".$Nombres."-".$Apellidos;
 ?>