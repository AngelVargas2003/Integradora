<?php
    include("conexionconbd.php");

    /*if($conex)
    {
        echo "<script> alert('La conexion con la base de datos Ta bien'); </script>";
    }
    else
    {
        echo "<script> alert('La conexion con la base de datos  Ta mal muy mal'); </script>";
    }*/

    if(isset($_POST['registar']))
    {

        if(strlen($_POST['name']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contra']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['genero']) >= 1 && strlen($_POST['direccion']) >= 1 )
        {
    
                $nombre = trim($_POST['name']);
                $correo = trim($_POST['correo']);
                $contra = trim($_POST['contra']);
                $telefono = trim($_POST['telefono']);
                $edad = trim($_POST['edad']);
                $genero = trim($_POST['genero']);
                $direccion = trim($_POST['direccion']);
                $consulta = "INSERT INTO `clientes`(`nombre`, `correo`, `contraseña`, `teléfono`, `edad`, `genero`, `direccion`) VALUES ('$nombre','$correo','$contra','$telefono','$edad','$genero','$direccion')";
                $resultado = mysqli_query($conex,$consulta);

                if($resultado)
                {
                    ?>
                    <script> alert('Te has registrado correctamente!'); </script>
                    <?php
                } 
                else
                {
                    ?>
                    <script> alert('ocurrio un error!'); </script>
                    <?php
                }
        }
        else 
        {
            ?>
            <script> alert('complete los campos!'); </script>
            <?php
        }
    }        
?>