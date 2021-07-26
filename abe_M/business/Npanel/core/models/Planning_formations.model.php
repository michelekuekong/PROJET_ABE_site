<?php
class Planning_formations{
    private $_id;
    private $_id_formation;
    private $_lieu;
    private $_debut;
    private $_fin;
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
    public function setId_formation($id_formation){
      $this->_id_formation=$id_formation;
    }
    public function setLieu($lieu){
      $this->_lieu=$lieu;
    }
     
    public function setDebut($debut){
        $this->_debut=$debut;
    }

    public function setFin($fin){
        $this->_fin=$fin;
    }

    public function setStatut($statut){
        $this->_statut=$statut;
    }

    public function setonline($online){
        $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
    public function getId_formation(){
      
       return $this->_id_formation;
    }
  
    public function getLieu(){
      
       return $this->_lieu;
    }

    public function getDebut(){
      
        return $this->_debut;
    }

    public function getFin(){
      
        return $this->_fin;
    }

    public function getStatut(){
      
        return $this->_statut;
    }

    public function getOnline(){
      
       return $this->_online;
    }
    
}
