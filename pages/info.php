<div class="box-display">
	<?php
		//ativa na classe Request echo $server_output;
		$post = array('key'=>'MY_KEY');
		Request::curl($post,SERVER_REQ.'info');
	?>
</div>