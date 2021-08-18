
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="img/VD2021.png" type="image/x-icon">
    <title>Registro de Clientes</title>
    <link rel="stylesheet" href="css/styleregistrocliente.css">
    <link rel="stylesheet" href="css/complogin.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>

    <div class="content" id="app">
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Iniciar Sesion Como Empleado</h3>
                <form action="">
                    <p>
                        <label>Ingrese su Correo</label>
                        <input v-model="persona.correo" type="email" name="correo">
                    </p> 
                    <p>
                        <label>Ingrese la contraseña</label>
                        <input v-model="persona.contrasena" type="password" name="contrasena">
                    </p>


                    <!--<p class="block">
                       <label>Message</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>-->
                    <p class="block">
                        <button type="button" @click="enviarFor" value="Registrar"> Iniciar Seccion </button>
                    </p>
                    <h4 id="ms" v-if="mostrarerror"> Correo o Contraseña incorrecta verifique los datos! </h4>
                </form>
            </div>
            <div class="contact-info">
                <a href="inicio.html"><img src="img/VD2021.png"></a>
                <h4>Viva Dent</h4>
                <ul>
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <a href="registroclientes.html" class="linkfull"> ¿No tienes una cuenta? | Registarse </a></p>
                
                </ul>
                <p class="block">
                    <a href="registroempleados.html"><button type="button" value="Registrar"> Registrarse como empleado </button></a>
                </p>
                <p class="block">
                    <a href="loginem.php"><button type="button" value="Registrar"> Iniciar Sesion como empleado </button></a>
                </p>
            </div>
        </div>
    </div>
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    var app = new Vue({
		el: '#app',
		data: {
			message: 'Registro de  Mensaje',
            persona:{
                correo:"",
                contrasena:""
           },
		},
        methods:{
			enviarFor:function(){
				var params = new URLSearchParams();
				params.append('correo', this.persona.correo);
                params.append('contrasena', this.persona.contrasena);

				axios.post('controller/iniciarsessionemp.php', params)
				/*.then(function (response) {

					console.log(response);
				})*/
                .then((response) => {
					this.mostrarerror=!response.data.acceso;
					if(response.data.acceso){
						window.location="newconsultas.php";
            }
				})
				.catch(function (error) {
					console.log(error);
				});

            }
        }
	})

</script>
</body>
</html>