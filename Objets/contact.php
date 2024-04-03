<?php

class contact
{
    private $id;
    private $nom;
    private $prenom;
    private $tel;
    private $region;


    function getId() { var_dump($this->id); }
    function getNom() { var_dump($this->nom); }
    function getPrenom() { var_dump($this->prenom); }
    function getTel() { var_dump($this->tel); }
    function getRegion() { var_dump($this->region); }


    function setId($var) { $this->id = $var; }
    function setNom($var) { $this->nom = $var; }
    function setPrenom($var) { $this->prenom = $var; }
    function setTel($var) { $this->tel = $var; }
    function setRegion($var) { $this->region = $var; }


    function getContact() {
        var_dump(get_object_vars($this));
    }

}

?>