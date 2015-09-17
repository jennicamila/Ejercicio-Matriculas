<?php 
	$grado = $_POST['grado'];
	$curso = $_POST['curso'];

	$A = array('Danzas','Teatro','Dibujo');
	$B = array('Danzas','Musica');
	$C = array('Teatro','Dibujo','Musica');

	if($grado == "Primero" && $curso == "A"){
		$miSelect = "<select id='materia' name='materia'>";
		foreach ($A as $materia) {
			$miSelect .= "<option value=".$materia.">".$materia."</option>";
		}
		$miSelect .= "</select>";
		echo $miSelect;
	}
	elseif ($grado == "Primero" && $curso =="B") {
		$miSelect = "<select id='materia' name='materia'>";
		foreach ($B as $materia) {
			$miSelect .= "<option value=".$materia.">".$materia."</option>";
		}
		$miSelect.="</select>";
		echo $miSelect;
	}
	elseif ($grado == "Primero" && $curso =="C") {
		$miSelect = "<select id='materia' name='materia'> ";
		foreach ($C as $materia) {
			$miSelect.="<option value=".$materia.">".$materia."</option>";
		}
		$miSelect.="</select>";
		echo $miSelect;
	}
	echo "";


	$A2= array('Teatro','Dibujo');
	$C2= array('Teatro','Musica');

	if($grado == "Segundo" && $curso== "A"){
		$miSelect = "<select id='materia' name='materia'>";
		foreach ($A2 as $materia) {
			$miSelect.= "<option value=".$materia.">".$materia."</option>";
		}
		$miSelect.="</select>";
		echo $miSelect;
	}elseif ($grado == "Segundo" && $curso =="C") {
		$miSelect = "<select id='materia' name'materia'>";
		foreach ($C as $materia) {
			$miSelect.="<option value=".$materia.">".$materia."</option>";
		}
		$miSelect.="</select>";
		echo "$miSelect";
	}
	echo "";

?>