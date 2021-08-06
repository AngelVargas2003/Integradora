<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Cliente
     */
    
    class Empleado extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nombre", "correo", "telefono", "edad","direccion","genero","contrasena","codval","horario"];
        protected $table = "empleados";
        public $nombre = "";
        public $correo = "";
        public $telefono = "";
        public $edad = "";
        public $direccion = "";
        public $genero = "";
        public $codval = "";
        public $horario = "";
        
        
        
    
    
        public function PersonaMayores($edad){
            
            $stmt = self::$pdo->prepare("select *  from $this->table  where  edad>=:edad");
            $stmt->bindParam(":edad",$edad);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            return  json_encode($resultados);
        }
        
        
    }