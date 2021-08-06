<?php
    
    namespace proyecto;
    
    use Exception;

   try{
        require("../../vendor/autoload.php");
        
        extract($_POST);
        $p = new Cliente();
        $p->nombre = $nombre;
        $p->correo = $correo;
        $p->telefono = $telefono;
        $p->edad = $edad;
        $p->direccion = $direccion;
        $p->genero = $genero;
        $p->contrasena = $contrasena;
        $p->save();
        
        //echo json_encode ($_POST);
       //extract($_POST);
//       echo $nombre;
       
      
//       $c=new Ciudad();
//       $c->nombre=$nombre;
//       $c->save();
      
      
      echo  json_encode( $p->all());
   
      
      
      
//        $p = new Persona();
//        $p->nombre = "Ramiro22";
//        $p->edad = "22";
//        $p->apellido_paterno = "Esquivel";
//        $p->apellido_materno = "Duran";
//        $p->save();
//


//      echo($p->nombre);
//      echo $c->nombre;
//
//
    //echo $p->PersonaMayores(20);
    
    
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//






