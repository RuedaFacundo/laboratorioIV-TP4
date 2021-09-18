<?php
    require_once "Interface/IPerson.php";

    class Ingles implements IPerson
    {
        public function saludar ()
        {
            return "Welcome!";
        }
        public function despedirse ()
        {
            return "Goodbye!";
        }
        public function otroMensaje(string $message)
        {
            return $message;
        }
    }
?>