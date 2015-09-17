<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="estilo.css" type="css/text" rel="stylesheet">
	<title>Pagina de Ejemplo de Ajax</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body >
<center>
<div class="imagen_fondo">
	<h1>MATRICULAS</h1>
	<form action="" method="POST">
	
		<strong>Nombres</strong><input type="text" class="textRedondeado" name="Nombres" id="Nombres"  required>
		</br>
		</br>
		
		<strong>Apellidos
		</strong><input type="text"  class="textRedondeado" name="Apellidos" id="Apellidos"  required>
		</br>
		</br>
		<strong>Valor-Base</strong><input type="number"  class="textRedondeado" name="ValorBase" id="ValorBase"  required>
		</br>
		</br>


		<strong>Seleccione el Grado:</strong>
		 </br>
		<select id="selectGrado" name="selectGrado" class="textRedondeado">

		  <option value="Primero">Primero</option>
		  <option value="Segundo">Segundo</option>
		 
		</select>
		

		<div id="resultado2"><strong>Seleccione el Grupo:</strong> <select id='grupo' name='grupo'class="textRedondeado"></select></div>
		</br>
		<div id="resultado3"><strong>Seleccione la Materia:</strong> <select id='materia' name='materia' class="textRedondeado"></select></div>
		</br>
		</br>

		<input type="button" value="Calcular" id="Bcalcular" name="Bcalcular">
		</br>
		</br>
		<div id="resultadofinal"></div>
		</div>
	</form>
</center>
	<script>
		//Funcion de JQuery
		$( "#selectGrado").change(function() {
				var grado = $("#selectGrado").val();
				$.ajax({
				  method:"POST",
				  url: "procesar.php",
				  data: { grado: grado}
				})
			  .done(function( msg ) {
			    	$("#grupo").html(msg);
			  });
		});
	</script>

	<script>

		$( "#grupo").change(function() {
				var grado = $("#selectGrado").val();
				var curso = $("#grupo").val();
				$.ajax({
				  method:"POST",
				  url: "procesar2.php",
				  data: { curso: curso, grado: grado}
				})
			  .done(function( msg ) {
			    	$("#materia").html(msg);
			  });
		});


	</script>

	<script >

		$( "#Bcalcular").click(function() {
				var Nombres= $("#Nombres").val();
				var Apellidos= $("#Apellidos").val();
				var ValorBase= $("#ValorBase").val();
				var grado = $("#selectGrado").val();
				var curso = $("#grupo").val();
				var materia = $("#materia").val();

				$.ajax({
				  method:"POST",
				  url: "procesar3.php",
				  data: { Nombres:Nombres,Apellidos:Apellidos,ValorBase:ValorBase,curso: curso, grado: grado,materia:materia}
				})
			  .done(function( msg ) {
			    	$("#resultadofinal").html(msg);
			  });
		});


	</script>

</body>
</html>