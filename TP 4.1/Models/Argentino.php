<?php
    require_once "Interface/IPerson.php";

    class Argentino implements IPerson
    {
        public function saludar ()
        {
            return "Bienvenido!";
        }
        public function despedirse ()
        {
            return "Hasta luego!";
        }
        public function otroMensaje(string $message)
        {
            return $message;
        }
    }
?>