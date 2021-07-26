<?php
class Devises{
    private $_id;
    private $_id_prix_produit;
    private $_type;
    private $_taux;
    private $_code_devise;
    private $_statut;
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
    public function setId_prix_produit($id_prix_produit){
      $this->_id_prix_produit=$id_prix_produit;
    }

     public function setType($type){
      $this->_type=stripslashes($type);
    }

    public function setTaux($taux){
        $this->_taux=$taux;
    }
    public function setCode_devise($code_devise){
      $this->_code_devise=stripslashes($code_devise);
    }

    public function setStatut($statut){
        $this->_statut=$statut;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_prix_produit(){
      
       return $this->_id_entreprise;
    }

    public function getType(){
      
       return $this->_type;
    }

    public function getTaux(){
      
       return $this->_taux;
    }

    
    public function getCode_devise(){
      
        return $this->_code_devise;
    }

    
    public function getStatut(){
      
        return $this->_statut;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
}
