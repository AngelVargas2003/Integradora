<?php
    
    namespace proyecto;
    class Authem
    {
        private    $correo;
        /**
         * @return mixed
         */
        public function getUser()
        {
            $session = new Sessionemp();
            $this->correo= $session->get('correo');
            return $this->correo;
        }
        /**
         * @param mixed $user
         */
        public function setUser($correo): void
        {
            $session = new Sessionemp();
            $session->set('correo', $correo);
            $this->correo = $correo;
        }
        public function clearUser(): void
        {
            $se=new Sessionemp();
            $se->remove("correo");
        }    
    }
