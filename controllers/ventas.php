<?php 
class Ventas extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render("ventas/index");
    }

    function registrar(){
        echo "<p style ='color:pink'>Se ha registrado un ventas</p>";
    }
}

 ?>