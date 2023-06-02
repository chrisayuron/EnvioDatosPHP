<?php 
    //$_GET Variable global que contiene los datos
    //$_POST
    if(isset($_GET["enviar-get"])){ //verifica si una variable esta vacia
        echo "Se envio por GET
        {$_GET["nombre"]} y su password es {$_GET["password"]}";
    }else if(isset($_POST["enviar-post"])){
        echo "Se envio por POST
        {$_POST["nombre"]} y su password es {$_POST["password"]}";
    }

?>