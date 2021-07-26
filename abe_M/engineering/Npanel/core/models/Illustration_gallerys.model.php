<?php
class Illustration_gallerys{
    private $_id;
    private $_id_gallery;
    private $_lien;
    private $_type;
    private $_detail;
    private $_couverture;
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
    public function setId_gallery($id_gallery){
      $this->_id_gallery=$id_gallery;
    }
     public function setLien($lien){
      $this->_lien=$lien;
    }
     public function setType($type){
      $this->_type=$type;
    }
     public function setDetail($detail){
      $this->_detail=stripslashes($detail);
    }
     public function setCouverture($couverture){
      $this->_couverture=stripslashes($couverture);
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
  
    public function getId_gallery(){
      
       return $this->_id_gallery;
    }

    public function getLien(){
      
       return $this->_lien;
    }

    public function getType(){
      
      return $this->_type;
    }
  
    public function getDetail(){
      
       return $this->_detail;
    }

    public function getCouverture(){
      
       return $this->_couverture;
    }

    public function getDate_pub(){
      
       return $this->_date_pub;
    }

    public function getOnline(){
      
        return $this->_online;
    }
    
}
