<form method="post" enctype="multipart/form-data">
	<div class="box-display">
		<h2>Nome:</h2>
		<input type="text" name="nome" placeholder="Insira o nome">
	</div>
	<div class="box-display">
		<h2>Marca:</h2>
		<input type="text" name="marca" placeholder="Insira a marca">
	</div>
	<div class="box-display">
		<h2>Imagem:</h2>
		<input type="file" name="image">
	</div>
	<input type="submit" name="enviar" value="Salvar!">
</form>
<?php
	if (isset($_POST['enviar'])) {
		$nome = $_POST['nome'];
		$marca = $_POST['marca'];
		$imagem = $_FILES['image'];

		$cf = new CURLFile($imagem['tmp_name'], $imagem['type'], $imagem['name']);

		$post = array('key'=>'MY_KEY','name'=>$nome,'marca'=>$marca,'image'=>$imagem['name'],
		'upload'=>$cf);
		Request::curl($post, SERVER_REQ.'insert');
		// Request::curl($post,"http://localhost/Web_service_1.0/insert");
	}
	
?>