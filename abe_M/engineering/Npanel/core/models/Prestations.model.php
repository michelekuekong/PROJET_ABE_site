<?php
class Prestations{
    private $_id;
    private $_id_parent;
    private $_id_entreprise;
    private $_titre;
    private $_description;
    private $_resume;
    private $_type;
    private $_date_pub;
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
    public function setId_parent($id_parent){
      $this->_id_parent=$id_parent;
    }
     public function setId_entreprise($id_entreprise){
      $this->_id_entreprise=$id_entreprise;
    }
    public function setTitre($titre){
      $this->_titre=stripslashes($titre);
    }

    public function setDescription($description){
      $this->_description=stripslashes($description);
    }

    public function setResume($resume){
      $this->_resume=stripslashes($resume);
    }

    
    public function setType($type){
      $this->_type=$type;
    }

    public function setDate_pub($date_pub){
      $this->_date_pub=$date_pub;
    }

     public function setOnline($online){
      $this->_online=$online;
    }


     public function getId(){
      
      return $this->_id;
    }
  
    public function getId_parent(){
      
       return $this->_id_parent;
    }

    public function getId_entreprise(){
      
       return $this->_id_entreprise;
    }

    public function getTitre(){
      
       return $this->_titre;
    }

    public function getDescription(){
      
       return $this->_description;
    }

   
    public function getResume(){
      
       return $this->_resume;
    }

   
    public function getType(){
      
       return $this->_type;
    }
    public function getDate_pub(){
      
       return $this->_date_pub;
    }
    public function getOnline(){
      
       return $this->_online;
    }
    
}
