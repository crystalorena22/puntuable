<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="utf-8">
		<meta name="description" content="Numeros primos en PHP">
		<meta name="keywords" content="PHP,Formularios,Javascript,diseño web,primos">
		<title>AF puntuable 1</title>
	</head>
	<style>
		*{box-sizing:border-box;}
		form{
			width:450px;
			padding:16px;
			border-radius:10px;
			margin:auto;
			background-color:#c8c4c9;
		}

		form input[type="submit"]{
			width:100%;
			padding:8px 16px;
			margin-top:32px;
			border:1px solid #000000;
			border-radius:5px;
			display:block;
			color:#fff;
			background-color:#000000;
		}
		form input[type="reset"]{
			width:100%;
			padding:8px 16px;
			margin-top:32px;
			border:1px solid #000000;
			border-radius:5px;
			display:block;
			color:#fff;
			background-color:#000000;
		}

		form input[type="submit"]:hover{
			cursor:pointer;
		}

		textarea{
			width:100%;
			height:100px;
			border:1px solid #f6f6f6;
			border-radius:3px;
			background-color:#f6f6f6;
			margin:8px 0;
			/*resize: vertical | horizontal | none | both*/
			resize:none;
			display:block;
		}
	</style>

	<body>
		<h1>Formulario</h1>
			<form name='formulario_operaciones' method='post' action='color2.php'>
				<table>
					<tr>
						<td>Escriba su Nombre: </td>
						<td><input type='text' name='nombre' placeholder='Nombre' required></td>
					</tr>
					<tr>
						<td>Escriba su Contraseña: </td>
						<td><input type='password' name='pass'placeholder='Contraseña' required></td>
					</tr>
					<tr>
						<td>Elija su marca de coche: <br>
							<input type='radio' name='coche' value='Citroën'>Citroën<br>
							<input type='radio' name='coche' value='Jepp' >Jeep<br>
							<input type='radio' name='coche' value='Toyota' >Toyota<br>
						</td>
					</tr>
					<tr>
						<td>Elija su Comunidad Autonoma: <br>
							<input type='checkbox' name='comunidad[]' value='Andalucia'>Andalucia<br>
							<input type='checkbox' name='comunidad[]' value='Galicia' >Galicia<br>
							<input type='checkbox' name='comunidad[]' value='Pais Vasco' >Pais Vasco<br>
							<input type='checkbox' name='comunidad[]' value='Cataluña' >Cataluña<br>
							<input type='checkbox' name='comunidad[]' value='Castilla y León' >Castilla y León<br>
						</td>
					</tr>
					<tr>
						<td>Escoja un animal:

							<select name='animal' required>
								<option>León</option>
								<option>Serpiente</option>
								<option>Pingüino</option>
								<option>Gato</option>

							</select>
						</td>
					</tr>
					<tr>
						<td>Escoja un color: <br>
							<input type='radio' name='color' value='#dc9aec'>Lila<br>
							<input type='radio' name='color' value='lightblue'>Celeste<br>
							<input type='radio' name='color' value='#d29626' >Beige<br>
						</td>
					</tr>
					<tr>
						<td>Comentario: <br>
							<Textarea name='mensaje' placeholder='Escribe un comentario' rows='4'cols='20'></Textarea>
						</td>
					</tr>
					<tr>
						<td> <br>
							<input type='hidden' name='oculto' value='El usuario se ha registrado'>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><br>
							<input type="submit" value="Enviar">
							<input type="reset" value="Borrar">
						</td>
					</tr>
				</table>
			</form>
		<footer>

		</footer>
	</body>
</html>
