<?php 

class Controller{

    function __construct(){

        //echo "<p> Controlador base</p>";
        $this->view = new View();//objeto vista

    }

    function loadModel($model){
        $url = 'model/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName;
        }
    }
}
?>