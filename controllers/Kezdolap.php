<?php 
class Kezdolap extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function Index(){   
        $this->View->Title='Kezdőlap';
        $this->View->Render('Kezdolap');
    }
}
?>