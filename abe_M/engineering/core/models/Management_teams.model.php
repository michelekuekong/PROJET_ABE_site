<?php
class Management_teams{
    private $_id;
    private $_nom;
    private $_description;
    private $_compte_facebook;
    private $_compte_twitter;
    private $_compte_instagram;
    private $_compte_linkedin;
    private $_fonction;
    private $_img;
    private $_email;
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
    public function setFonction($fonction){
      $this->_fonction=$fonction;
    }
    public function setNom($nom){
      $this->_nom=$nom;
    }
    public function setCompte_facebook($compte_facebook){
      $this->_compte_facebook=$compte_facebook;
    }
    public function setCompte_twitter($compte_twitter){
      $this->_compte_twitter=$compte_twitter;
    }

    public function setCompte_instagram($compte_instagram){
      $this->_compte_instagram=$compte_instagram;
    }

    public function setCompte_linkedin($compte_linkedin){
      $this->_compte_linkedin=$compte_linkedin;
    }

    public function setImg($img){
        $this->_img=$img;
    }

    public function setOnline($online){
      $this->_online=$online;
    }

    public function setEmail($email){
      $this->_email=$email;
    }
    public function setDescription($description){
      $this->_description=$description;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getFonction(){
      
       return $this->_fonction;
    }
  
    public function getNom(){
      
       return $this->_nom;
    }

    public function getCompte_facebook(){
      
       return $this->_compte_facebook;
    }

    public function getCompte_twitter(){
      
       return $this->_compte_twitter;
    }

    public function getCompte_linkedin(){
      
       return $this->_compte_linkedin;
    }

    public function getCompte_instagram(){
      
      return $this->_compte_instagram;
   }

   public function getImg(){
      
    return $this->_img;
   }

  public function getOnline(){
      
    return $this->_online;
  }

  public function getEmail(){
      
    return $this->_email;
  }
  public function getDescription(){
      
    return $this->_description;
  }
    
}
