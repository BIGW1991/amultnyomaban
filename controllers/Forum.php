<?php 
class Forum extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function Index(){
        $this->_loadJS();
        $this->View->Title='Fórum';
        $this->View->Render('Forum');
    }
    
    function _loadJS(){
        $this->View->PreLoadJs="<script type=\"text/javascript\" src=\"".URL."publics/js/jquery.js\"></script>";
        $this->View->PostLoadJs=null;
    }
}
?>