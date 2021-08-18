<?php
    
    namespace proyecto;
    
    use Exception;
    try {
        require("../vendor/autoload.php");
        $auth = new Authem();
        if (!$auth->getUser()) {
            header("Location: loginem.php");
            exit();
        }
    } catch (Exception $e) {
        echo($e->getMessage());
    }







