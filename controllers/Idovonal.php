<?php 
class Idovonal extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function Index(){
        $this->_loadJS();   
        $this->View->Title='Idővonal';
        
        $this->View->Render('Idovonal');
    }
    
    function _loadJS(){
        $this->View->PreLoadJs="<script type=\"text/javascript\" src=\"".URL."publics/js/jquery.js\"></script>";   
        $this->View->PostLoadJs="<script type=\"text/javascript\" src=\"".URL."publics/js/timeline.js\"></script>";
    }
}
?>