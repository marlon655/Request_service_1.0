<?php
	class Painel{
		public static function loadPage(){
			if (isset($_GET['url'])) {
				$url = explode('/', $_GET['url']);
				if (file_exists('pages/'.$url[0].'.php')) {
					include('pages/'.$url[0].'.php');
				}else{
					// header('location:' .INCLUDE_PATH);
				}
			}else{

			}
		}
	}