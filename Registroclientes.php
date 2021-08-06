<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registroclientes.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <form action="" method="POST" id="formulario">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupos">
                <input type="text" name="name" id="Nombre" required><span class="barra"></span>
                <label for="">Nombre Completo</label>
            </div>
            <div class="grupos">
                <input type="email" name="correo" id="Nombre" required><span class="barra"></span>
                <label for="">Correo</label>
            </div><div class="grupos">
                <input type="password" name="contra" id="Nombre" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="grupos">
                <input type="password" name="" id="Nombre" required><span class="barra"></span>
                <label for="">Confirmar Contraseña</label>
            </div>
            <div class="grupos">
                <input type="text" name="telefono" id="Nombre" required><span class="barra"></span>
                <label for="">Teléfono</label>
            </div>
            <div class="grupos">
                <input type="text" name="edad" id="Nombre" required><span class="barra"></span>
                <label for="">Edad</label>
            </div>
            <div class="grupos">
                <input type="text" name="genero" id="Nombre" required><span class="barra"></span>
                <label for="">Genero</label>
            </div>
            <div class="grupos">
                <input type="text" name="direccion" id="Nombre" required><span class="barra"></span>
                <label for="">Dirección</label>
            </div>
            <form action="?" method="POST">
                <div style="margin-left: 65px;" class="g-recaptcha" data-sitekey="your_site_key"></div>
                <br/>
                </form>
                <button style="margin-left: 145px;" type="submit" name="registar" class="btn btn-outline-danger">Registrarme Ahora</button>
        </div>
    </form>
    <?php
        include("regclientes.php");
    ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   
</body>
</html>