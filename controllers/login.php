<?php 
class Login extends Controller {
    function __construct(){

        parent::__construct();
        $this->view->render("login/index");
        //echo "<p style='color:green;font-size:14po'>LLAMASTE AL CONTROLADOR MAIN</p>"; 
    }
}

?>