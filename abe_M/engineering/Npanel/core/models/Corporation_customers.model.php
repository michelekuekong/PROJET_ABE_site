<?php
class Corporation_customers{
    private $_id;
    private $_nom;
    private $_tel;
    private $_fax;
    private $_email;
    private $_site_web;
    private $_adresse;
    private $_ville;
    private $_pays;
    private $_online;
    
  
    public function __construct(array $data){
        $this->hydrate($data);
    }
  
    public function hydrate(array $data){
        
        foreach($data as $key => $value){
  
          $method="set".ucfirst($key);
          if(method_exists($this,$method)){
              $this->$method($value);
          }
  
        }
    }
    
    public function setId($id){
        $id= (int) $id;
        if($id>0)$this->_id=$id;
    }
  
    public function setNom($nom){
      $nom= (string) $nom;
      $this->_nom= stripslashes($nom);
    }

    public function setTel($tel){
        $this->_tel=$tel;
    }

    public function setFax($fax){
        $this->_fax=$fax;
    }

    public function setEmail($email){
        $email= (string) $email;
        $this->_email= $email;
    }

    public function setSite_web($site_web){
        $site_web= (string) $site_web;
        $this->_site_web= $site_web;
    }

     public function setAdresse($adresse){
        $adresse= (string) $adresse;
        $this->_adresse= stripslashes($adresse);
    }

    public function setPays($pays){
        $pays= (string) $pays;
        $this->_pays= stripslashes($pays);
    }

    public function setVille($ville){
        $ville= (string) $ville;
        $this->_ville= stripslashes($ville);
    }

     public function setOnline($online){
      $this->_online=$online;
    }



  


    public function getId(){
      return $this->_id;
    }
  
    public function getNom(){
      return $this->_nom;
    }

    public function getTel(){
        return $this->_tel;
    }

    public function getFax(){
        return $this->_Fax;
    }


    public function getEmail(){
        return $this->_email;
    }


    public function getSite_web(){
        return $this->_site_web;
    }

    public function getAdresse(){
       return  $this->_adresse;
    }


    public function getVille(){
       return  $this->_ville;
    }
    
    public function getPays(){
        return $this->_pays;
    }
  
     public function getOnline(){
      
       return $this->_online;
    }
 
}
  