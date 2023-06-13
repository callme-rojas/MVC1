<?php 
class Users extends Controller {
    function __construct(){

        parent::__construct();
        $this->view->render("users/index");
        //echo "<p style='color:green;font-size:14po'>LLAMASTE AL CONTROLADOR MAIN</p>"; 
    }
}

 ?>