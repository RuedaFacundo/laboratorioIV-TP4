<?php
    require_once "Models/Argentino.php";
    require_once "Models/Ingles.php";
    require_once "Models/Portugues.php";

    var_dump($_POST);
    $idioma = $_POST['idioma'];
    $accion = $_POST['accion'];
    $texto = $_POST['text'];

    if($_POST)
    {
        if (isset($_POST["idioma"]) && isset($_POST["accion"])){
            switch($idioma)
            {
                case "Argentino":
                    $person = new Argentino();
                    break;
                case "Ingles":
                    $person = new Ingles();
                    break;
                case "Portugues":
                    $person = new Portugues();
                    break;
            }
            if($accion == "otroMensaje"){
                $message = isset($_POST["text"]) ? $_POST["text"] : "Ops, olvidaste escribir el mensaje!";
                call_user_func(array($person, $accion), $message);
            }
            else{
                call_user_func(array($person, $accion));
            }
        }
    }
?>
