<?php
class Bootstrap{
	
	private $_url=null;
	private $_controller=null;
	private $_controllerPath='controllers/';
	private $_defaultFile='Blog.php';
	private $_modelPath='models/';
	private $_errorPath='Hiba.php';
	
	public function Init(){
		$this->_url= $this->GetUrl();
		
		if(empty($this->_url[0])){
			$this->LoadDefaultController();
			return false;
		}
		$this->LoadExistingController();
		$this->CallControllerMethod();
	}
	
	private function GetUrl(){
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		return explode('/', $url);
	}
	
	private function LoadDefaultController(){
		require $this->_controllerPath.$this->_defaultFile;
		$this->_controller = new Blog();
		$this->_controller->Index();
	}
	
	private function LoadExistingController(){
		$file = $this->_controllerPath . $this->_url[0] . '.php';
		if (file_exists($file)) {
			require $file;
			$this->_controller = new $this->_url[0];
			$this->_controller->LoadModel($this->_url[0].'.php',$this->_modelPath);
		} else {
			$this->Error();
			return false;
		}

	}
	
	private function CallControllerMethod(){
		$length=count($this->_url);
		if ($length>1){
			if (!method_exists($this->_controller, $this->_url[1])) {
				$this->Error();
			}
		}
		
		switch($length){
			case 5: $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4]);
					break;
			case 4: $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3]);
					break;
			case 3: $this->_controller->{$this->_url[1]}($this->_url[2]);
					break;
			case 2: $this->_controller->{$this->_url[1]}();
					break;
			default: $this->_controller->Index();
					break;
		}
		}
	
	private function Error() {
		require $this->_controllerPath.$this->_errorPath;
		$this->_controller = new Hiba(404);
		$this->_controller->Index();
		exit;
	}
}
?>