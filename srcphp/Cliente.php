<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Cliente
     */
    
    class Cliente extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nombre", "correo", "telefono", "edad","direccion","genero","contrasena"];
        protected $table = "clientes";
        public $nombre = "";
        public $correo = "";
        public $telefono = "";
        public $edad = "";
        public $direccion = "";
        public $genero = "";
        public $contrasena = "";
        
        
    }
