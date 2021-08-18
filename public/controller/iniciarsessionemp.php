<?php
    
    namespace proyecto;
    
    use Exception;
    
    try {
        require("../../vendor/autoload.php");
         extract($_POST);
       
        $u = new  Useremp();
        echo ($u->loginemp($correo,$contrasena));

    } catch (Exception $e) {
        echo($e->getMessage());
    }
    //