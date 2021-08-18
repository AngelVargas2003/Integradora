<?php
 require('verificarsessioncli.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioestilos.css">
    <link rel="icon" href="img/VD2021.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="cssreservar.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script>
      $(function(){
         $("#txtfecha").datepicker()({
           dateFormat:"yy-mm-dd"
         });
      });
    </script>
    <title>Reservar cita inco</title>
</head>
<body>
  <header class="header">
    <div class="container logo-nav-container">
        <a href="cerrarsession.php" class="logo"><img src="img/VD2021.png" alt="" mar width="80px" height="80px"></a>
        <nav class="navigation">
            <ul class="show">
              <li><a href="Inicio.html">Inicio</a></li>
              <li><a href="Reservarcitas.php">Reservar Citas</a></li>
              <li><a href="newconsultas.php">Consultas</a></li>
              <li><a href="registroclientes.html">Registrarse</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="app">
<div class="content">
  <div class="contact-wrapper animated bounceInUp">
      <div class="contact-form" id="container">
          <h3 style="color: white; font-size: 32px;">Reservar una cita</h3>
          <div class="fecha">
            <p id="dia"></p>
            <br>
            <p id="fecha"></p>
            <br>
            <p id="text">de</p>
            <p id="mes"></p>
            <br>
            <p id="año"></p>
            <br>
        </div>
        <div class="hora">
            <h4 id="horas"></h4>
            <h4 id="puntos">:</h4>
            <h4 id="minutos"></h4>
            <h4 id="dospuntos">:</h4>
            <h4 id="segundos"></h4>
            <h4 id="pmam"></h4>
        </div>
          <form action="">
              <p>
                  <label>Ingrese su Identificador</label>
                  <input v-model="persona.cliente" type="text" name="cliente">
              </p>
              <p>
                  <label>Ingrese el Identificador del doctor</label>
                  <select v-model="persona.empleado" type="email" name="empleado">
                  <option>10000</option><option>10001</option><option>10002</option><option>10003</option><option>10004</option>
                  <option>10005</option><option>10006</option>
                  </select>
              </p>
              <p>
                  <label>Ingrese fecha de hoy</label>
                  <select v-model="persona.fechacit" name="fechacit" placeholder="0000-00-00">
                     <option></option> <option>2021-08-18</fechacit><option>2021-08-19</option><option>2021-08-20</option>
                     <option>2021-08-21</option><option>2021-08-22</option><option>2021-08-23</option><option>2021-08-24</option>
                     <option>2021-08-25</option><option>2021-08-26</option><option>2021-08-27</option><option>2021-08-28</option><option>2021-08-29</option>
                     <option>2021-08-30</option><option>2021-08-31</option><option>2021-09-01</option><option>2021-09-02</option><option>2021-09-03</option>
                     <option>2021-09-04</option><option>2021-09-05</option><option>2021-09-06</option><option>2021-09-07</option><option>2021-09-08</option>
                     <option>2021-09-09</option><option>2021-09-10</option><option>2021-09-11</option><option>2021-09-12</option><option>2021-09-13</option>
                     <option>2021-09-14</option><option>2021-09-15</option><option>2021-09-16</option><option>2021-09-17</option><option>2021-09-18</option>
                     <option>2021-09-19</option><option>2021-09-20</option><option>2021-09-21</option><option>2021-09-22</option><option>2021-09-23</option>
                     <option>2021-09-24</option><option>2021-09-25</option><option>2021-09-26</option><option>2021-09-27</option><option>2021-09-28</option>
                     <option>2021-09-29</option><option>2021-09-30</option>
                  </select>
              </p>
              <p>
                  <label>Servicio</label>
                  <select v-model="persona.servicio" name="servicio">
                  <option></option><option>60001</option><option>60002</option><option>60005</option><option>60006</option>
                  <option>60007</option>
                  </select>
              </p>
              <p>
                  <label>Hora de consulta</label>
                  <select v-model="persona.horacon" name="horacon" placeholder="00:00:00">
                     <option></option> <option>09:00:00</option><option>10:00:00</option><option>11:00:00</option>
                     <option>12:00:00</option><option>13:00:00</option><option>14:00:00</option><option>15:00:00</option>
                     <option>16:00:00</option><option>17:00:00</option><option>18:00:00</option><option>19:00:00</option><option>20:00:00</option>
                  </select>
              </p>
              <p>
                  <label>Ingrese fecha de la consulta</label>
                  <select v-model="persona.fechacon" name="fechacon" placeholder="0000-00-00">
                  <option></option> <option>2021-08-18</fechacit><option>2021-08-19</option><option>2021-08-20</option>
                     <option>2021-08-21</option><option>2021-08-22</option><option>2021-08-23</option><option>2021-08-24</option>
                     <option>2021-08-25</option><option>2021-08-26</option><option>2021-08-27</option><option>2021-08-28</option><option>2021-08-29</option>
                     <option>2021-08-30</option><option>2021-08-31</option><option>2021-09-01</option><option>2021-09-02</option><option>2021-09-03</option>
                     <option>2021-09-04</option><option>2021-09-05</option><option>2021-09-06</option><option>2021-09-07</option><option>2021-09-08</option>
                     <option>2021-09-09</option><option>2021-09-10</option><option>2021-09-11</option><option>2021-09-12</option><option>2021-09-13</option>
                     <option>2021-09-14</option><option>2021-09-15</option><option>2021-09-16</option><option>2021-09-17</option><option>2021-09-18</option>
                     <option>2021-09-19</option><option>2021-09-20</option><option>2021-09-21</option><option>2021-09-22</option><option>2021-09-23</option>
                     <option>2021-09-24</option><option>2021-09-25</option><option>2021-09-26</option><option>2021-09-27</option><option>2021-09-28</option>
                     <option>2021-09-29</option><option>2021-09-30</option>
                  </select>
              </p>
              <!--<p>
                  <label>Fecha de consulta</label>
                  <input v-model="persona.fechacon" type="" name="fechacon" placeholder="0000-00-00" id="txtfecha" readonly>
              </p>-->
              <!--<p class="block">
                 <label>Message</label> 
                  <textarea name="message" rows="3"></textarea>
              </p>-->
              <p class="block">
                  <button type="button" @click="enviarFor" value="Registrar"> Reservar cita </button>
              </p>
          </form>
      </div>
      <div class="contact-info">
          <h4 style="color: white;">Viva Dent</h4>
          <ul>
              <li><i class="fas fa-clock"></i >  9:00 - 20:00</li>
              <li><i  class="fas fa-phone"></i >  871 185 1679</li>
              <li><i  class="fas fa-envelope-open-text"></i style="color: white;">  doctora@dentalvera.com</li>
          </ul>
          <p style="color: white;">Gracias por visitarnos</p>
          <p style="color: white;">www.vivadent.com</p><br><br>
          </div>
  </div>
</div>
</div>
    
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
   <script src="js/fecha.js"></script>
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
			    fechacit:"",
                fechacon:"",
                horacon:"",
                cliente:"",
                empleado:"",
                servicio:""
           },
		},
        methods:{
			enviarFor:function(){
				var params = new URLSearchParams();
				params.append('fechacit', this.persona.fechacit);
				params.append('fechacon', this.persona.fechacon);
				params.append('horacon', this.persona.horacon);
                params.append('cliente', this.persona.cliente);
                params.append('empleado', this.persona.empleado);
                params.append('servicio', this.persona.servicio);

				axios.post('controller/insertarcita.php', params)

				.then(function (response) {

					console.log(response);
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