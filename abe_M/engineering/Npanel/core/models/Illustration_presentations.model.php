<?php
class Illustration_presentations{
    private $_id;
    private $_id_presentation;
    private $_lien;
    private $_type;
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
    public function setId_presentation($id_presentation){
      $this->_id_presentation=$id_presentation;
    }
     public function setLien($lien){
      $this->_lien=$lien;
    }
     public function setType($type){
      $this->_type=$type;
    }
     public function setOnline($online){
      $this->_online=$online;
    }

    public function getId(){
      
      return $this->_id;
    }
  
    public function getId_presentation(){
      
       return $this->_id_presentation;
    }

    public function getLien(){
      
       return $this->_lien;
    }

    public function getType(){
      
      return $this->_type;
    }

    public function getOnline(){
      
        return $this->_online;
    }
    
}
