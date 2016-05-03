<?php
class Controller {

	function __construct() {
		$this->View = new View();
		$this->View->Icon=URL.'/publics/images/iranytu.jpg';
	}
	
	public function LoadModel($Name, $Path='models/') {
		
		$Path = $Path.$Name.'_model.php';
		
		if (file_exists($Path)) {
			require $Path.$Name.'_model.php';
			
			$ModelName = $Name . '_Model';
			$this->Model = new $ModelName();
		}		
	}

}
?>