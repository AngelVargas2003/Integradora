<?php
    
    namespace proyecto;
    
    use Exception;
    
    try {
        require("../../vendor/autoload.php");
         extract($_POST);
       
        $u = new  Usercli();
        echo ($u->logincli($correo,$contrasena));

    } catch (Exception $e) {
        echo($e->getMessage());
    }
    //