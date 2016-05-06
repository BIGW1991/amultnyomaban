<?php
class Controller {

	function __construct() {
		$this->View = new View();
		$this->IniManager=new IniManager();
		$this->data=$this->IniManager->Read_INI_File();
		$this->View->Icon=URL.$this->data['ShortcutIcon']['File'];
		$this->View->CoverImage=URL.$this->data['CoverImage']['File'];
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