<?php 

    class App{
        function __construct(){
            //echo "<P>HELLO! FROM MY APP</P>";
            //extraccion de datos de la URL

            $url = $_GET['url'];
  //          echo "<br>";
//            echo $url;

            $url = explode("/", $url);
            //echo "<br>";
            //echo $url[0];
            //echo "<br>";
            //  llamada al controlador
            $rute = "controllers/".$url[0].".php";
            if(file_exists($rute)){
                require_once $rute;
                $c = new $url[0];    
                //Procesar el metodo 
                if(isset($url[1]) ){
                    if(method_exists($c, $url[1]))
                    $c->{$url[1]}();
                } else {
                    //echo "<p>El metodo no existe</p>";
                }
                  
            }else{
                //echo "No existe ese archivo la URL";
                require_once "controllers/errores.php";
                $e = new Errores();
            }
        }
    }
?>