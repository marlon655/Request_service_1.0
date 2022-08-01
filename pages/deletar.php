<form method="post" enctype="multipart/form-data">
	<div class="box-display">
		<h2>Arquivo a Deletar:</h2>
		<input type="text" name="id" placeholder="Insira o id">
	</div>
	<input type="submit" name="delete" value="Deletar!">
</form>
<?php
	if (isset($_POST['delete'])) {
		$id = $_POST['id'];

		$post = array('key'=>'MY_KEY');
		Request::curl($post,SERVER_REQ.'deleteId/'.$id);
	}
	
?>