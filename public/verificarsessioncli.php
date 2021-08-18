<?php
    
    namespace proyecto;
    
    use Exception;
    try {
        require("../vendor/autoload.php");
        $auth = new Authcli();
        if (!$auth->getUser()) {
            header("Location: loginclie.php");
            exit();
        }
    } catch (Exception $e) {
        echo($e->getMessage());
    }







