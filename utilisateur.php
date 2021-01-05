<?php

class utilisateur {
    protected $user_name;
    protected $user_pass;
    protected $prix_abo;
    protected $user_region;


    public const ABONNEMENT = 15;
    
    /*public function getNom(){
        return $this->user_name;
    }
<!-- ////////////////////////////////////////////////////////////////////////-->
    public function setNom($new_user_name){
        $this->user_name = $new_user_name;

    }

    public function setPass($new_user_pass){
        $this->user_pass = $new_user_pass;
    }*/
////////////////////////////////////////////////////////////////////////-->
    public function __construct($nom, $pass, $reg){

        $this->user_name = $nom;
        $this->user_pass = $pass;
        $this->user_region = $reg;
    }
////////////////////////////////////////////////////////////////////////-->

    public function __destruct() {
        
    }

    public function setPrixAbo () {
        if ($this->user_region === 'Sud') {
            return $this->prix_abo = self::ABONNEMENT /2;
        }
        else {
            return $this->prix_abo = self::ABONNEMENT;
        }
    }

    public function getPrixAbo() {
        echo $this->prixA_abo;
    }
    public function getNom(){
        echo $this->user_name;
    }
}
?>