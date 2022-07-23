<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Request Web Service</title>
</head>
<body>
	<div class="center">
		<div class="content">
			<div class="buttons">
				<a href="<?php echo INCLUDE_PATH?>inserir">INSERIR</a>
				<a href="<?php echo INCLUDE_PATH?>listar">LISTAR</a>
				<a href="<?php echo INCLUDE_PATH?>listar-id">LISTAR-ID</a>
				<a href="<?php echo INCLUDE_PATH?>deletar">DELETAR</a>
				<a href="<?php echo INCLUDE_PATH?>info">INFO</a>
			</div><!-- buttons -->

			<div class="box-content">
				<?php Painel::loadPage(); ?>
			</div><!-- box-content -->
			<div class="clear"></div>

		</div><!-- content -->
	</div><!-- center -->
</body>
</html>