	<form method="post" enctype="multipart/form-data">
		<p>Imagens:
		<input type="file" name="uploaded" />
		<input type="submit" value="Enviar" />
	</p>
	</form>
<?php
	// include('config.php');
	// $file = __DIR__ ."/testeimg.jpg";
	// $upname = "uploaded.jpg";
	$file = $_FILES['uploaded'];

	$cf = new CURLFile($file['tmp_name'], $file['type'], $file['name']);
//,'name'=>'EB110 SS','marca'=>'Bugatti','image'=> $file['name'],"upload"=>$cf
	// $cf = new CURLFile($file, mime_content_type($file), $upname);

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, "http://localhost/Web_service_1.0/delete/27");
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS,['key'=>'MY_KEY']);
	// curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('key'=>'MY_KEY','name'=>'TT','marca'=>'Audi','image'=>'TT.jpeg')));
	// curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(''=>'')));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec($curl);
	curl_close($curl);
	
	$resultado = json_decode($server_output);

	echo $server_output;



	//------------------------------------------------------------------------------------------------
	// if($resultado->delete == 'success'){
	// 	echo $resultado->message;
	// 	echo '<h2>ID:'.$resultado->id_deleted.' Deletado</h2>';
	// }

	// echo $resultado->insert;
	// if ($resultado->insert == 'success') {
	// 	echo "INSERIDO COM SUCESSO";
	// }

	// $id = 4;
	// echo $resultado[$id]->name;
	// echo '<img src="'.$resultado[$id]->image.'" width="300" height="200">';
	// echo $resultado[$id]->image;

	// foreach ($resultado as $key => $value) {
	// 	echo $value->name;
	// 	echo '<br/>';
	// 	echo '<img src="'.$value->image.'" width="300" height="200">';
	// 	echo '<br/>';
	// }
		// echo '<h2>Nome:'.$value['name'].'</h2>';


	// echo '<img src="'.$resultado[0]->image.'" width="300" height="200">';
	// print_r($server_output);
?>
