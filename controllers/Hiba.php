<?php
class Hiba extends Controller{
	private $_errorCode=0;
	function __construct($errorCode){
		parent::__construct();
		$this->_errorCode=$errorCode;
		switch($errorCode){
			case 404:$this->View->Content='<p>Az oldal nem található!</p>'; break;
			default:$this->View->Content='<p>Meghatározhatatlan hiba történt!</p>'; break;
		}
	}
	
	public function Index(){
		$this->View->Title='Hiba!';
		switch($this->_errorCode){
			case 404:$this->View->Content='<p>Az oldal nem található!</p>'; break;
			default:$this->View->Content='<p>Meghatározhatatlan hiba történt!</p>'; break;
		}
		$this->View->Render('Hiba');
	}
}