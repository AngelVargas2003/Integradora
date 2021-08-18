<?php
    
    namespace proyecto;
    
    use Exception;
    try {
        require("../vendor/autoload.php");
        $se=new Authem();
        $se->clearUser();
        header("Location: inicio.html");
        exit();
    } catch (Exception $e) {
        echo($e->getMessage());
    }