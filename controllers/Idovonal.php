<?php 
class Idovonal extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function Index(){   
        $this->View->Title='Idővonal';
        
        $this->View->Render('Idovonal');
    }
}
?>