<?php
	class Request
	{
		public static function curl($post,$url){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS,$post);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec($curl);
			curl_close($curl);

			//Mostra o JSON que retorna do servidor;
			// echo $server_output;

			//Retorna o JSON decodificado;
			return json_decode($server_output);
			
			//retorna em JSON;
			// return $server_output;
		}
	}