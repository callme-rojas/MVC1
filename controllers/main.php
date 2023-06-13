<?php 
class Main extends Controller {
    function __construct(){

        parent::__construct();
        $this->view->render("main/index");
        //echo "<p style='color:green;font-size:14po'>LLAMASTE AL CONTROLADOR MAIN</p>"; 
    }

    function saludo() {
        //echo "<p>Llamaste al metodo saludo</p>";
    }
}

 ?>