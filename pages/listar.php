<form method="post">
	<?php
		$post = array('key'=>'MY_KEY');
		$resp = Request::curl($post,"http://localhost/Web_service_1.0/selectAll");
		// $respo = json_decode($resp);
	?>

	<?php 
		foreach($resp as $key => $value){ ?>
	<div class="box-display">
			<h2>Nome: <?php echo $value->name; ?></h2>
			<h2>Marca: <?php echo $value->marca; ?></h2>
			<img src= "<?php echo $value->image ?>" width="300" height="200" />;
	</div>
	<?php } ?>
</form>
