<?php
class View{
	function __construct(){
	}
	
	public function Render($page){
		require 'views/header.php';
		require 'views/'.$page.'/index.php';
		require 'views/footer.php';
	}
}