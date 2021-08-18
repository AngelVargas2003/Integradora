<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Cliente
     */
    
    class Cita extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["fechacit", "fechacon", "horacon", "cliente","empleado","servicio"];
        protected $table = "citas";
        public $fechacit = "";
        public $fechacon = "";
        public $horacon = "";
        public $cliente = "";
        public $empleado = "";
        public $servicio = "";
   
    }