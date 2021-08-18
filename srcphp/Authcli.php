<?php
    
    namespace proyecto;
    class Authcli
    {
        private    $correo;
        /**
         * @return mixed
         */
        public function getUser()
        {
            $session = new Sessioncli();
            $this->correo= $session->get('correo');
            return $this->correo;
        }
        /**
         * @param mixed $user
         */
        public function setUser($correo): void
        {
            $session = new Sessioncli();
            $session->set('correo', $correo);
            $this->correo = $correo;
        }
        public function clearUser(): void
        {
            $se=new Sessioncli();
            $se->remove("correo");
        }    
    }
