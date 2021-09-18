<?php
    require_once "Interface/IPerson.php";

    class Portugues implements IPerson
    {
        public function saludar ()
        {
            return "Receber!";
        }
        public function Despedirse ()
        {
            return "Até logo!!";
        }
        public function otroMensaje(string $message)
        {
            return $message;
        }
    }
?>