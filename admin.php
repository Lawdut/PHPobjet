<?php

    class admin extends utilisateur{
        protected $ban;

        public const ABONNEMENT = 5;

        public function __construct($nom, $pass, $reg){
            $this->user_name = strtoupper($nom);
            $this->user_pass = $pass;
            $this->user_region = $reg;
        }
        
        public function setBan($b) {
            $this->ban[].=$b;
        }
        /*public function getNom2(){
            return $this->user_name;
        }*/

        public function getNom(){
            parent::getNom();
            echo ' (depuis la classe étendue)<br>';
        }

        public function getBan() {
            echo 'Utilisateur bannis par ' .$this->user_name. ' : ';
            foreach($this->ban as $valeur) {
                echo $valeur. ', ';
            }
        }

        public function setPrixAbo() {
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = self::ABONNEMENT;
            }
            else {
                return $this->prix_abo = parent::ABONNEMENT /2;
            }
        }
    }