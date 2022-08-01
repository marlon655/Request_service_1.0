<form method="post">
	<?php
		$post = array('key'=>'MY_KEY');
		$resp = Request::curl($post,SERVER_REQ.'selectAll');
		// $respo = json_decode($resp);
	?>

	<?php 
		foreach($resp as $key => $value){ ?>
	<div class="box-display">
			<h2>ID: <?php echo $value->id; ?></h2>
			<h2>Nome: <?php echo $value->name; ?></h2>
			<h2>Marca: <?php echo $value->marca; ?></h2>
			<img src= "<?php echo $value->image ?>" width="300" height="200" />
	</div>
	<?php } ?>
</form>
