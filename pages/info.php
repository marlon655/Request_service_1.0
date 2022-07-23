<div class="box-display">
	<?php
		//ativa na classe Request echo $server_output;
		$post = array('key'=>'MY_KEY');
		Request::curl($post,'http://localhost/Web_service_1.0/info');
	?>
</div>