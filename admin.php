<?php

    class admin extends utilisateur{
        protected $ban;
        
        public function setBan($b) {
            $this->ban[].=$b;
        }
        /*public function getNom2(){
            return $this->user_name;
        }

        public function getNom(){
            return $this->user_name;
        }*/

        public function getBan() {
            echo 'Utilisateur bannis par ' .$this->user_name. ' : ';
            foreach($this->ban as $valeur) {
                echo $valeur. ', ';
            }
        }
    }