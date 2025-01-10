<html>
	<head meta="charset=utf-8">
		<style type="text/css">
			h1 {
				text-align: center;
			}
			form {
				font-family: Arial, sans-serif;
				color: #333;
				margin: 0 auto;
				max-width: 600px;
				padding: 20px;
				border: 1px solid #ccc;
			}
			label {
				display: block;
				margin-bottom: 10px;
			}
			input,
			textarea {
				display: block;
				width: 100%;
				padding: 10px;
				margin-bottom: 20px;
				border: 1px solid #ccc;
			}
			#button {
				background-color: #4CAF50;
				color: white;
				padding: 10px 20px;
				border: none;
				cursor: pointer;
			}
			button:hover {
				background-color: #45a049;
			}
			#genero {
				display: inline-flex;
				justify-content: left;
			}
		</style>
		<title>Contato</title>
	</head>	
	<body>
		<h1>Formulário de contatos</h1>			
		<form method="POST" action="valida.php" />
		<label>Nome:
		<input type="text" name="nome" />
		</label>
		<br />
		<label>E-mail:
		<input type="e-mail" name="email" />
		</label>
		<br />
		<label>Website:
		<input type="text" name="site" />
		</label>
		<br />
		<label>Comentários:
		<textarea name="comentarios" rows="10" cols="30">
		</textarea>
		</label>
		<label>Genero:</label>
		<label id="genero">
		<input type="radio" name="genero" value="Feminino">
		Feminino
		<input type="radio" name="genero" value="Masculino">
		Masculino
		<input type="radio" name="genero" value="Outro">
		Outro
		</label>
		<input id="button" type="submit" value="Enviar">
	</body>
</html>	