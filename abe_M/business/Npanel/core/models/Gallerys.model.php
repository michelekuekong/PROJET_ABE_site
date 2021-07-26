<?php
class Gallerys{
    private $_id;
    private $_id_entreprise;
    private $_titre;
    private $_date_creation;
    private $_resume;
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
    public function setId_entreprise($id_entreprise){
      $this->_id_entreprise=$id_entreprise;
    }
     public function setTitre($titre){
      $this->_titre=stripslashes($titre);
    }
    public function setDate_creation($date_creation){
      $this->_date_creation=$date_creation;
    }

    public function setResume($resume){
      $this->_resume=stripslashes($resume);
    }

     public function setOnline($online){
      $this->_online=$online;
    }

    public function getId(){
      
      return $this->_id;
    }
  
    public function getId_entreprise(){
      
       return $this->_id_entreprise;
    }

    public function getTitre(){
      
       return $this->_titre;
    }

    public function getDate_creation(){
      
       return $this->_date_creation;
    }

    public function getResume(){
      
       return $this->_resume;
    }

    public function getOnline(){
      
        return $this->_online;
    }
    
}
