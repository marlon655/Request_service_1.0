<form method="post">
	<div class="box-display">
		<h2>Mostrar ID:</h2>
		<input type="text" name="id" placeholder="Insira o ID">
	</div>
	<input type="submit" name="enviar" value="Mostrar!">
</form>

<?php 
	if (isset($_POST['enviar'])) {
		$id = $_POST['id'];
		$post = array('key'=>'MY_KEY');
		$resp = Request::curl($post,'http://localhost/Web_service_1.0/selectId/'.$id);
		// $respo = json_decode($resp);
		if($resp->message == 'success'){
?>
<div class="box-display">
		<!-- <h2>Nome: <?php $resp->nome; ?></h2> -->
		<h2>Nome: <?php echo $resp->name ?></h2>
		<h2>Marca: <?php echo $resp->marca ?></h2>
		<img src= "<?php echo $resp->image ?>" width="300" height="200" />;
</div>
<?php 
		}
	}
?>