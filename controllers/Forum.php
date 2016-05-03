<?php 
class Forum extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    function Index(){   
        $this->View->Title='Fórum';
        $this->View->Render('Forum');
    }
}
?>