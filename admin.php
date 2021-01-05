<?php

    class admin extends utilisateur{

        public function getNom2(){
            return $this->user_name;
        }

        public function getNom(){
            return $this->user_name;
        }
    }