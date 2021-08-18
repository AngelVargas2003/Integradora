<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    /**
     * Class Persona
     */
    
    class Usercli extends Models
    {
        /**
         * @var array
         */
        /*protected $filleable = [
            "user",
            "contrasena",
            "nombre"
            ];
        protected $table = "clientes";
        public $user="";
        public $contrasena="";
        public $nombre="";*/

        protected $filleable = ["nombre", "correo", "telefono", "edad","direccion","genero","contrasena"];
        protected $table = "clientes";
        public $nombre = "";
        public $correo = "";
        public $telefono = "";
        public $edad = "";
        public $direccion = "";
        public $contrasena = "";
        public $genero = "";
        
        
    
    
        public function logincli($correo,$contrasena){
            $respuesta=[];
            $stmt = self::$pdo->prepare("select *  from $this->table  where  correo =:correo  and contrasena =:contrasena");
            $stmt->bindParam(":correo",$correo);
            $stmt->bindParam(":contrasena",$contrasena);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            if($resultados){
                $respuesta["acceso"]=true;
                $respuesta["correo"]=$resultados[0];
                $auth=new Authcli();
                $auth->setUser($resultados[0]);
               return  json_encode($respuesta);
            }
            $respuesta["acceso"]=false;
            $respuesta["correo"]=[];
            return  json_encode($respuesta);
            
            
        }
    
        public function find_name($name){
        
            $stmt = self::$pdo->prepare("select *  from $this->table  where  nombre=:name");
            $stmt->bindParam(":name",$name);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            if($resultados==null){
                return  json_encode([]);
            }
            return  json_encode($resultados[0]);
        }
    }