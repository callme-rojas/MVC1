<?php
class View{

    function __construct(){
        //echo "<p> Vista base</p>";
    }

    //funcion que llama a la vistsarespectiva
    function render($nombre){

        //$rute = "views/".$nombre.".php";
        //echo $rute;
        require "views/".$nombre.".php";

    }
}
?>